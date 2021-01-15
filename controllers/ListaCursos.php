<?php

// estoy en controllers/ListaCursos.php

require '../fw/fw.php';
require '../models/Cursos.php';
require '../views/ListadoCursos.php';
require '../views/ListadoCursosNombre.php';


if(!isset($_GET['nombrecurso']))
{
	$m = new Cursos();
	$cursos = $m->getTodos();

	$v = new ListadoCursos();
	$v->cursos = $cursos;
	$v->render();
}

if(isset($_GET['nombrecurso']))
{
	$nombreCurso = $_GET['nombrecurso'];
	
	$mcn = new Cursos();
	$cursonombre = $mcn->getNombreCurso($nombreCurso);

	$v = new ListadoCursosNombre();
	$v->cursosnombre = $cursonombre;
	$v->render();
}

?>
