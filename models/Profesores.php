<?php

// estoy en models/Profesores.php

class Profesores extends Model
{

	public function getTodos()
	{
		$this->db->query("SELECT * from profesores");
		return $this->db->fetchAll();
	}

	public function getPro()
	{
		$this->db->query("	SELECT *
							FROM profesores
							WHERE ID_Profesor NOT IN
							(SELECT i.ID_Profesor
							FROM profesores_cursos as i
                            GROUP BY i.ID_Profesor
                            HAVING COUNT(i.ID_Profesor)>1)
						");
		return $this->db->fetchAll();
	}

	public function getId($email) {

		if(ctype_digit($email)) throw new validacionException('error1');
		if(strlen($email) < 2)  throw new validacionException('error2');
		if(strlen($email) > 20) throw new validacionException('error3');
		$email = $this->db->escape($email);
		$email = $this->db->escapeWildcards($email);

		$this->db->query("SELECT a.ID_Profesor
							FROM profesores as a
							WHERE a.Email= '$email' ");
		return $this->db->fetch();
	}

	public function valId($idPro){

		if(!isset($idPro)) throw new validacionException('error ID 1');
		if(!ctype_digit($idPro)) throw new validacionException('error ID 2');
		if($idPro < 1) throw new validacionException('error ID 3');

		$this->db->query("SELECT *
							FROM profesores as a
							WHERE a.ID_Profesor= '$idPro' ");

		if($this->db->numRows() != 1) throw new validacionException('error ID 4');


		$id = $idPro;
		return $id;
	}


	public function getDatos($id) {

		if(!isset($id)) throw new validacionException('error ID 1');
		if(!ctype_digit($id)) throw new validacionException('error ID 2');
		if($id < 1) throw new validacionException('error ID 3');

		$this->db->query("	SELECT a.ID_Profesor, a.Nombre, a.Apellido,a.Tipo_Documento,a.Num_Documento,a.Edad,a.Telefono,a.Email
							FROM profesores as a
							WHERE a.ID_Profesor = $id 
							LIMIT 1");
		return $this->db->fetchAll();
	}

	public function getProfeCurso($idprofe)
	{
		if(!ctype_digit($idprofe)) throw new validacionException('error 1');
		if($idprofe < 1) throw new validacionException('error 2');
		$id = $idprofe;
		

		$this->db->query("SELECT p.ID_Profesor, p.nombre, p.apellido, c.ID_Curso, c.nombre as 'Curso',c.Descripcion, c.Area
						  from profesores_cursos as pc 
                          left join profesores as p on pc.ID_Profesor = p.ID_Profesor
                          left join cursos as c on pc.ID_Curso = c.ID_Curso
						  where p.ID_Profesor = $id");
		
		return $this->db->fetchAll();
	}

	public function getApellidoProfe($apellidoProfe)
	{
		if(strlen($apellidoProfe) < 2) throw new validacionException('error 3');
		if(strlen($apellidoProfe) > 20) throw new validacionException('error 4');
		if(ctype_digit($apellidoProfe)) throw new validacionException('error 6');
		htmlentities($apellidoProfe);
		$apellidoProfe = $this->db->escape($apellidoProfe);
		$apellidoProfe = $this->db->escapeWildcards($apellidoProfe);

		$apellido = $apellidoProfe;
		
		$this->db->query("SELECT * from profesores where apellido like '%$apellido%' ");
		
		return $this->db->fetchAll();
	}


	public function validarLogin($email, $pass) {

		if(ctype_digit($email)) throw new validacionException('error email 1');
		if(strlen($email) < 2)  throw new validacionException('error email 2');
		if(strlen($email) > 20) throw new validacionException('error email 3');
		htmlentities($email);
		$email = $this->db->escape($email);
		$email = $this->db->escapeWildcards($email);
		$e = $email;

		//if(!ctype_digit($pass)) throw new validacionExceptionAlum('error pass 1');
		if(strlen($pass) < 4)   throw new validacionException('error pass 2');
		if(strlen($pass) > 12)  throw new validacionException('error pass 3');
		htmlentities($pass);
		$pass = $this->db->escape($pass);
		$pass = $this->db->escapeWildcards($pass);
		$p = sha1($pass);
		
		$this->db->query("SELECT * from profesores where email = '" . $e . "' AND contrasenia = '" . $p . "';");

		if($this->db->numRows() != 1) return false;

		return true;
	}

	public function RegistrarProfesor($nom,$ape,$tdoc,$ndoc,$edad,$tel,$email,$pass){

		//validacion nombre

		if(!isset($nom)) throw new validacionException('error Nombre 1');
		if(ctype_digit($nom)) throw new validacionException('error Nombre 2');
		if(strlen($nom) < 2)  throw new validacionException('error Nombre 3');
		if(strlen($nom) > 20) throw new validacionException('error Nombre 4');
		htmlentities($nom);
		$nom = $this->db->escape($nom);
		$nom = $this->db->escapeWildcards($nom);
		$n = $nom;

		//validacion apellido

		if(!isset($ape)) throw new validacionException('error Apellido reg 1');
		if(ctype_digit($ape)) throw new validacionException('error Apellido reg 2');
		if(strlen($ape) < 2)  throw new validacionException('error Apellido reg 3');
		if(strlen($ape) > 20) throw new validacionException('error Apellido reg 4');
		htmlentities($ape);
		$nom = $this->db->escape($ape);
		$nom = $this->db->escapeWildcards($ape);
		$a = $ape;

		//validacion tipo de documento

		if(!isset($tdoc)) throw new validacionException('error Tipo Documento 1');
		if($tdoc!= 'DNI' && $tdoc != 'Pasaporte' ) throw new validacionException('error Tipo Documento 2');
		htmlentities($tdoc);
		$tdoc = $this->db->escape($tdoc);
		$tdoc = $this->db->escapeWildcards($tdoc);
		$td = $tdoc;

		//validacion numero de documento

		if(!isset($ndoc)) throw new validacionException('error NumeroDocumento 1');
		if(strlen($ndoc) < 6) throw new validacionException('error NumeroDocumento 3');
		if(strlen($ndoc) > 15) throw new validacionException('error NumeroDocumento 4');
		htmlentities($ndoc);
		$tdoc = $this->db->escape($ndoc);
		$tdoc = $this->db->escapeWildcards($ndoc);
		$nd = $ndoc;

		//validacion edad

		if(!isset($edad)) throw new validacionException('error edad 1');
		if(!ctype_digit($edad)) throw new validacionException('error edad 2');
		if($edad < 1) throw new validacionException('error edad 3');
		if($edad > 99) throw new validacionException('error edad 4');
		$e = $edad;

		//validacion telefono

		if(!isset($tel)) throw new validacionException('error telefono 1');
		if(!ctype_digit($tel)) throw new validacionException('error telefono 2');
		if(strlen($tel) < 8) throw new validacionException('error telefono 3');
		if(strlen($tel) > 15) throw new validacionException('error telefono 4');
		$te = $tel;

		//validacion email
		if(!isset($email)) throw new validacionException('error email 1');
		if(strlen($email) < 6) throw new validacionException('error email 2');
		if(strlen($email) > 30) throw new validacionException('error email 3');
		htmlentities($email);
		$tdoc = $this->db->escape($email);
		$tdoc = $this->db->escapeWildcards($email);
		$em = $email;
		

		//validacion pass

		if(!isset($pass)) throw new validacionException('error pass reg 1');
		if(strlen($pass) < 6) throw new validacionException('error pass reg 2');
		if(strlen($pass) > 30) throw new validacionException('error pass reg 3');
		htmlentities($pass);
		$tdoc = $this->db->escape($pass);
		$tdoc = $this->db->escapeWildcards($pass);
		$p = sha1($pass);

		$this->db->query("	INSERT INTO profesores
									(ID_Profesor , Nombre , Apellido , Tipo_Documento , Num_Documento , Edad , Telefono , Email , contrasenia) VALUES
									(''		   , '$n'   , '$a'     , '$td'       	, '$nd'         , $e   , $te      , '$em@ic.com', '$p'        )
						");


	}

}

class validacionException extends Exception {}

?>
