<?php

// models/Alumnos.php

class Alumnos extends Model {
	
	
	public function getTodos() {
		$this->db->query("SELECT * FROM alumnos where nombre <> 'admin' ");
		return $this->db->fetchAll();
	}

	public function getId($email) {

		if(ctype_digit($email)) throw new validacionExceptionAlum('error1');
		if(strlen($email) < 2)  throw new validacionExceptionAlum('error2');
		if(strlen($email) > 20) throw new validacionExceptionAlum('error3');
		$email = $this->db->escape($email);
		$email = $this->db->escapeWildcards($email);

		$this->db->query("SELECT a.ID_Alumno
							FROM alumnos as a
							WHERE a.Email= '$email' ");
		return $this->db->fetch();
	}

	public function valId($idAlu){

		if(!isset($idAlu)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($idAlu)) throw new validacionExceptionAlum('error ID 2');
		if($idAlu < 1) throw new validacionExceptionAlum('error ID 3');

		$this->db->query("SELECT *
							FROM alumnos as a
							WHERE a.ID_Alumno= '$idAlu' ");

		if($this->db->numRows() != 1) throw new validacionExceptionAlum('error ID 4');


		$id = $idAlu;
		return $id;
	}

	public function getDatos($id) {

		if(!isset($id)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 2');
		if($id < 1) throw new validacionExceptionAlum('error ID 3');

		$this->db->query("	SELECT a.ID_Alumno, a.Nombre, a.Apellido,a.Tipo_Documento,a.Num_Documento,a.Edad,a.Telefono,a.Email
							FROM alumnos as a
							WHERE a.ID_Alumno = $id 
							LIMIT 1");
		return $this->db->fetchAll();
	}

	public function getCursos($id){
		
		if(!isset($id)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 2');
		if($id < 1) throw new validacionExceptionAlum('error ID 3');

		$this->db->query("	SELECT a.ID_Alumno, a.Nombre as 'Nombre Alumno', c.Nombre as 'Curso', c.Descripcion, c.Area, d.ID_Dia, d.Dia,t.ID_Turno, t.Turno, p.Nombre as 'Nombre Profesor', p.Apellido as 'Apellido Profesor', p.Email as 'Email Profesor'
							FROM inscripciones as i
							LEFT JOIN alumnos as a ON
							a.ID_Alumno=i.ID_Alumno
							LEFT JOIN cursos as c ON
							c.ID_Curso=i.ID_Curso
							LEFT JOIN inscripciones_cursos as ic ON
							ic.ID_Curso=i.ID_Curso
							LEFT JOIN dias as d ON
							d.ID_Dia=ic.ID_Dia
							LEFT JOIN turnos as t ON
							t.ID_Turno=ic.ID_Turno
							LEFT JOIN profesores_cursos as pc ON
							pc.ID_Curso=i.ID_Curso
							LEFT JOIN profesores as p ON
							p.ID_Profesor=pc.ID_Profesor
							WHERE a.ID_Alumno = $id AND i.ID_inscripciones=ic.ID_inscripciones ");
		return $this->db->fetchAll();
	}

	public function getApellidoAlu($apellidoAlu){

		if(ctype_digit($apellidoAlu)) throw new validacionExceptionAlum('error Apellido 1');
		if(strlen($apellidoAlu) < 1)  throw new validacionExceptionAlum('error Apellido 2');
		if(strlen($apellidoAlu) > 20) throw new validacionExceptionAlum('error Apellido 3');
		htmlentities($apellidoAlu);
		$apellidoAlu = $this->db->escape($apellidoAlu);
		$apellidoAlu = $this->db->escapeWildcards($apellidoAlu);

		$apellido = $apellidoAlu;
		
		$this->db->query("SELECT * from alumnos where apellido like '%$apellido%' ");
		
		return $this->db->fetchAll();
	}

	public function validarLogin($email, $pass) {

		if(ctype_digit($email)) throw new validacionExceptionAlum('error email 1');
		if(strlen($email) < 2)  throw new validacionExceptionAlum('error email 2');
		if(strlen($email) > 20) throw new validacionExceptionAlum('error email 3');
		htmlentities($email);
		$email = $this->db->escape($email);
		$email = $this->db->escapeWildcards($email);
		$e = $email;

		//if(!ctype_digit($pass)) throw new validacionExceptionAlum('error pass 1');
		if(strlen($pass) < 4)   throw new validacionExceptionAlum('error pass 2');
		if(strlen($pass) > 12)  throw new validacionExceptionAlum('error pass 3');
		htmlentities($pass);
		$pass = $this->db->escape($pass);
		$pass = $this->db->escapeWildcards($pass);
		$p = sha1($pass);
		
		$this->db->query("SELECT * from alumnos where email = '" . $e . "' AND contrasenia = '" . $p . "';");

		if($this->db->numRows() != 1) return false;

		return true;
	}

	public function RegistrarAlumno($nom,$ape,$tdoc,$ndoc,$edad,$tel,$email,$pass){

		//validacion nombre

		if(!isset($nom)) throw new validacionExceptionAlum('error Nombre 1');
		if(ctype_digit($nom)) throw new validacionExceptionAlum('error Nombre 2');
		if(strlen($nom) < 2)  throw new validacionExceptionAlum('error Nombre 3');
		if(strlen($nom) > 20) throw new validacionExceptionAlum('error Nombre 4');
		htmlentities($nom);
		$nom = $this->db->escape($nom);
		$nom = $this->db->escapeWildcards($nom);
		$n = $nom;

		//validacion apellido

		if(!isset($ape)) throw new validacionExceptionAlum('error Apellido reg 1');
		if(ctype_digit($ape)) throw new validacionExceptionAlum('error Apellido reg 2');
		if(strlen($ape) < 2)  throw new validacionExceptionAlum('error Apellido reg 3');
		if(strlen($ape) > 20) throw new validacionExceptionAlum('error Apellido reg 4');
		htmlentities($ape);
		$nom = $this->db->escape($ape);
		$nom = $this->db->escapeWildcards($ape);
		$a = $ape;

		//validacion tipo de documento

		if(!isset($tdoc)) throw new validacionExceptionAlum('error Tipo Documento 1');
		if($tdoc!= 'DNI' && $tdoc != 'Pasaporte' ) throw new validacionExceptionFac('error Tipo Documento 2');
		htmlentities($tdoc);
		$tdoc = $this->db->escape($tdoc);
		$tdoc = $this->db->escapeWildcards($tdoc);
		$td = $tdoc;

		//validacion numero de documento

		if(!isset($ndoc)) throw new validacionExceptionFac('error NumeroDocumento 1');
		if(strlen($ndoc) < 6) throw new validacionExceptionFac('error NumeroDocumento 3');
		if(strlen($ndoc) > 15) throw new validacionExceptionFac('error NumeroDocumento 4');
		htmlentities($ndoc);
		$tdoc = $this->db->escape($ndoc);
		$tdoc = $this->db->escapeWildcards($ndoc);
		$nd = $ndoc;

		//validacion edad

		if(!isset($edad)) throw new validacionExceptionFac('error edad 1');
		if(!ctype_digit($edad)) throw new validacionExceptionFac('error edad 2');
		if($edad < 1) throw new validacionExceptionFac('error edad 3');
		if($edad > 99) throw new validacionExceptionFac('error edad 4');
		$e = $edad;

		//validacion telefono

		if(!isset($tel)) throw new validacionExceptionFac('error telefono 1');
		if(!ctype_digit($tel)) throw new validacionExceptionFac('error telefono 2');
		if(strlen($tel) < 8) throw new validacionExceptionFac('error telefono 3');
		if(strlen($tel) > 15) throw new validacionExceptionFac('error telefono 4');
		$te = $tel;

		//validacion email
		if(!isset($email)) throw new validacionExceptionFac('error email 1');
		if(strlen($email) < 6) throw new validacionExceptionFac('error email 2');
		if(strlen($email) > 30) throw new validacionExceptionFac('error email 3');
		htmlentities($email);
		$tdoc = $this->db->escape($email);
		$tdoc = $this->db->escapeWildcards($email);
		$em = $email;
		

		//validacion pass

		if(!isset($pass)) throw new validacionExceptionFac('error pass reg 1');
		if(strlen($pass) < 6) throw new validacionExceptionFac('error pass reg 2');
		if(strlen($pass) > 30) throw new validacionExceptionFac('error pass reg 3');
		htmlentities($pass);
		$tdoc = $this->db->escape($pass);
		$tdoc = $this->db->escapeWildcards($pass);
		$p = sha1($pass);

		$this->db->query("	INSERT INTO alumnos
									(ID_Alumno , Nombre , Apellido , Tipo_Documento , Num_Documento , Edad , Telefono , Email , contrasenia) VALUES
									(''		   , '$n'   , '$a'     , '$td'       	, '$nd'         , $e   , $te      , '$em@ic.com', '$p'        )
						");


	}

}

class validacionExceptionAlum extends Exception {}

?>
