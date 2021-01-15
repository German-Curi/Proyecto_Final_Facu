<?php

// estoy en controllers/registrar.php


require '../fw/fw.php';
require '../models/Alumnos.php';
require '../views/Registro.php';
require '../views/RegistroOk.php';

$malu = new Alumnos();

if(isset($_POST['Flag']))
{
	$malu->RegistrarAlumno(
							$_POST['Nombre'],
							$_POST['Apellido'],
							$_POST['Tdoc'],
							$_POST['Ndoc'],
							$_POST['Edad'],
							$_POST['Telefono'],
							$_POST['Email'],
							$_POST['Pass']
	);
	
	$v = new RegistroOk();
	
}

else{

	$v = new Registro();
	

}

$v->render();
?>
