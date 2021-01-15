<?php

// controllers/DarinfoProfesor.php

require '../fw/fw.php';
require '../models/Profesores.php';
require '../views/DatosCursosProf.php';

	
if(!isset($_SESSION['profesor']))
	{
		header('Location: inicio-de-sesion');
		exit;
	}


$mpro = new Profesores();

$pro = $mpro->getId($_SESSION['profesor']);


$pro = $pro['ID_Profesor'];
$id = $mpro->valId($pro);

$profdatos = $mpro->getDatos($id);
$profcursos = $mpro->getProfeCurso($id);


$v = new DatosCursosProf();
$v->profdat = $profdatos;
$v->cursprof= $profcursos;
$v->render();


