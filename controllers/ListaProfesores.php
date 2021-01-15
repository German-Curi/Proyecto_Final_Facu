<?php

// estoy controllers/ListaProfesores.php


require '../fw/fw.php';
require '../models/Profesores.php';
require '../views/ListadoProfesores.php';
require '../views/ListadoProfesoresCursos.php';
require '../views/ListadoProfesoresApellido.php';


if(!isset($_GET['profe']) && !isset($_GET['apellidoprofe']))
{
	$p = new Profesores();
	$todos = $p->getTodos();

	$v = new ListadoProfesores();
	$v->profesores = $todos;
	$v->render();
}

if(isset($_GET['profe']))
{
	$idprofe = $_GET['profe'];
	
	$pc = new Profesores();
	$mprofeCurso = $pc->getProfeCurso($idprofe);

	$v = new ListadoProfesoresCursos();
	$v->profesorescursos = $mprofeCurso;
	$v->render();
}

if(isset($_GET['apellidoprofe']))
{
	$apellidoProfe = $_GET['apellidoprofe'];
	
	$pa = new Profesores();
	$mprofeapellido = $pa->getApellidoProfe($apellidoProfe);

	$v = new ListadoProfesoresApellido();
	$v->profesoresapellido = $mprofeapellido;
	$v->render();
}

?>







