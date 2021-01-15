<?php

// estoy en controllers/login.php


require '../fw/fw.php';
require '../models/Alumnos.php';
require '../models/Profesores.php';

require '../views/Login.php';


$v = new login();
$v->render();

if(isset($_POST['email']) && isset($_POST['pass']))
{
	if($_POST['email'] == 'admin@ic.com' && $_POST['pass'] == '1234' )
	{
		$_SESSION['admin'] = true;
		header('Location: menu-principal');
		exit;
	}

	if((new Alumnos)->validarLogin($_POST['email'], $_POST['pass']) )
	{
		$_SESSION['alumno'] = $_POST['email'];
		header('Location: sesion-alumno');
		exit;
	}

	if((new Profesores)->validarLogin($_POST['email'], $_POST['pass']) )
	{
		$_SESSION['profesor'] = $_POST['email'];
		header('Location: sesion-profesor');
		exit;
	}
}

?>
