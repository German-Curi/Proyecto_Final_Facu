<?php

// models/InscripcionAlumno.php


class InscripcionAlumno extends Model {


	public function InscribirCursos($id) {
		
		if(!isset($id)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 2');
		if($id < 1) throw new validacionExceptionAlum('error ID 3');

		$this->db->query("	SELECT *
							FROM cursos
							WHERE ID_Curso NOT IN
							(SELECT i.ID_Curso
							FROM inscripciones as i
							LEFT JOIN alumnos as a ON
							a.ID_Alumno=i.ID_Alumno
							WHERE a.ID_Alumno= '$id')
						");
		return $this->db->fetchAll();
	}       

	public function InscribirDias($id) {
		
		if(!isset($id)) throw new validacionExceptionAlum('error ID 4');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 5');
		if($id < 1) throw new validacionExceptionAlum('error ID 6');

		$this->db->query("	SELECT *
							FROM dias
							WHERE ID_Dia NOT IN
							(SELECT ic.ID_Dia
							FROM inscripciones_cursos as ic
							LEFT JOIN inscripciones as i ON
 							ic.ID_Inscripciones=i.ID_Inscripciones
							LEFT JOIN alumnos as a ON
							a.ID_Alumno=i.ID_Alumno
							WHERE a.ID_Alumno= '$id'
							GROUP BY ic.ID_Dia
							HAVING COUNT(ic.ID_Turno)>2 )
						");
		return $this->db->fetchAll();
	}

	public function InscribirTurnos() {
		$this->db->query("	SELECT *
							FROM turnos
						");
		return $this->db->fetchAll();
	}
	
	public function DarAltaAlumno($id,$curso,$dia,$turno){

		if(!isset($id)) throw new validacionExceptionAlum('error ID 7');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 8');
		if($id < 1) throw new validacionExceptionAlum('error ID 9');

		//validacion curso
		if(!isset($curso)) throw new validacionException('error CURSO 1');
		if(!ctype_digit($curso)) throw new validacionException('error CURSO 2');
        if($curso < 1) throw new validacionException('error CURSO 3');
        if($curso > 50) throw new validacionException('error CURSO 4'); 
        $c = $curso;

        //validacion dia
        if(!isset($dia)) throw new validacionException('error DIA 1');
		if(!ctype_digit($dia))  throw new validacionException('error DIA 2');
        if($dia < 1) throw new validacionException('error DIA 3');
        if($dia > 5) throw new validacionException('error DIA 4');
        $d = $dia;

        //validacion turno
        if(!isset($turno)) throw new validacionException('error TURNO 1');
        if(!ctype_digit($turno)) throw new validacionException('error TURNO 2');
        if($turno < 1) throw new validacionException('error TURNO 3');
        if($turno > 3 ) throw new validacionException('error TURNO 4');
        $t = $turno;
		
		$a = $this->db->query("	INSERT INTO inscripciones (ID_Alumno,ID_Curso)
								VALUES ($id, $c)
						     ");

		
		$ulti = $this->db->insertId($a);

	
		$this->db->query("	INSERT INTO inscripciones_cursos
							(ID_Inscripciones,ID_Curso,ID_Dia,ID_Turno)
							 VALUES ($ulti, $c, $d , $t )
						");
		
	
	}

}

class validacionException extends Exception {}

?>
