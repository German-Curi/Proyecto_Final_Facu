<?php

// estoy en models/Cursos.php

class Cursos extends Model
{
	
	public function getTodos()
	{
		$this->db->query("SELECT * from cursos");
		return $this->db->fetchAll();
	}

	public function getCur()
	{
		$this->db->query(" SELECT *
							FROM cursos
							WHERE ID_Curso NOT IN
							(SELECT i.ID_Curso
							FROM profesores_cursos as i) ");
		return $this->db->fetchAll();
	}

	public function RegistrarCurso($nom,$des,$area,$val){

		//validacion nombre

		if(!isset($nom)) throw new validacionExceptionCursos('error Nombre 1');
		if(ctype_digit($nom)) throw new validacionExceptionCursos('error Nombre 2');
		if(strlen($nom) < 2)  throw new validacionExceptionCursos('error Nombre 3');
		if(strlen($nom) > 50) throw new validacionExceptionCursos('error Nombre 4');
		htmlentities($nom);
		$nom = $this->db->escape($nom);
		$nom = $this->db->escapeWildcards($nom);
		$n = $nom;

		//validacion descripcion

		if(!isset($des)) throw new validacionExceptionCursos('error descripcion reg 1');
		if(ctype_digit($des)) throw new validacionExceptionCursos('error descripcion reg 2');
		if(strlen($des) < 2)  throw new validacionExceptionCursos('error descripcion reg 3');
		if(strlen($des) > 100) throw new validacionExceptioCursos('error descripcion reg 4');
		htmlentities($des);
		$nom = $this->db->escape($des);
		$nom = $this->db->escapeWildcards($des);
		$d = $des;

		//validacion tipo de area
	
		if(!isset($area)) throw new validacionExceptionCursos('error area reg 1');
		if(ctype_digit($area)) throw new validacionExceptionCursos('error area reg 2');
		if(strlen($area) < 2)  throw new validacionExceptionCursos('error area reg 3');
		if(strlen($area) > 50) throw new validacionExceptionCursos('error area reg 4');
		htmlentities($area);
		$nom = $this->db->escape($area);
		$nom = $this->db->escapeWildcards($area);
		$a = $area;

		//validacion valor

		if(!isset($val)) throw new validacionExceptionCursos('error edad 1');
		if(!is_numeric($val)) throw new validacionExceptionCursos('error edad 2');
		$v = $val;


		$this->db->query("	INSERT INTO cursos
									(ID_Curso , Nombre , Descripcion , Area , Valor ) VALUES
									(''		   , '$n'   , '$d'     , '$a'       	, $v    )
						");


	}

		public function AsignarCurso($cur,$pro){

		//validacion id curso

		
		if(!isset($cur)) throw new validacionExceptionCursos('error ID 1');
		if(!ctype_digit($cur)) throw new validacionExceptionCursos('error ID 2');
		if($cur < 1) throw new validacionExceptionCursos('error ID 3');

		$this->db->query("SELECT *
							FROM cursos as c
							WHERE c.ID_Curso= '$cur' ");

		if($this->db->numRows() != 1) throw new validacionExceptionCursos('error ID 4');


		$idcur = $cur;

		//validacion id profesor

		if(!isset($pro)) throw new validacionExceptionCursos('error ID 1');
		if(!ctype_digit($pro)) throw new validacionExceptionCursos('error ID 2');
		if($pro < 1) throw new validacionExceptionCursos('error ID 3');

		$this->db->query("SELECT *
							FROM profesores as p
							WHERE p.ID_Profesor= '$pro' ");

		if($this->db->numRows() != 1) throw new validacionExceptionCursos('error ID 4');


		$idpro = $pro;



		$this->db->query("	INSERT INTO profesores_cursos
									(ID_Profesor , ID_Curso   ) VALUES
									($idpro  , $idcur		  )
						");


	}


	public function getNombreCurso($nombreCurso)
	{
		if(strlen($nombreCurso) < 1) throw new validacionExceptionCursos('error 1');
		if(strlen($nombreCurso) > 20) throw new validacionExceptionCursos('error 2');
		if(ctype_digit($nombreCurso)) throw new validacionExceptionCursos('error 3');
		htmlentities($nombreCurso);
		$nombreCurso = $this->db->escape($nombreCurso);
		$nombreCurso = $this->db->escapeWildcards($nombreCurso);
		
		$nombre = $nombreCurso;
		
		$this->db->query("SELECT * from cursos where nombre like '%$nombre%' ");
		
		return $this->db->fetchAll();
	}
}

class validacionExceptionCursos extends Exception {}

?>
