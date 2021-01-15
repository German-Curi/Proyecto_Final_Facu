<?php

// estoy en controllers/RegistrarProf.php FALTAN COSAS 


require '../fw/fw.php';
require '../models/Profesores.php';
require '../views/RegistroProf.php';
require '../views/RegistroOk.php';

$malu = new Profesores();

if(isset($_POST['Flag']))
{
	$malu->RegistrarProfesor(
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

	$v = new RegistroProf();
	

}

$v->render();
?>
