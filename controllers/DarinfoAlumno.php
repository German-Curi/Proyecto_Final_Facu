<?php

// controllers/DarinfoAlumno.php

require '../fw/fw.php';
require '../models/Alumnos.php';
require '../views/DatosCursosAlum.php';

	
if(!isset($_SESSION['alumno']))
	{
		header('Location: inicio-de-sesion');
		exit;
	}


$malu = new Alumnos();

$alu = $malu->getId($_SESSION['alumno']);


$alu = $alu['ID_Alumno'];
$id = $malu->valId($alu);

$aludatos = $malu->getDatos($id);
$alucursos = $malu->getCursos($id);


$v = new DatosCursosAlum();
$v->alumdat = $aludatos;
$v->cursprof= $alucursos;
$v->render();


