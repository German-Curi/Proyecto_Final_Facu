<?php

// estoy en controllers/AsignarProfCurs.php


require '../fw/fw.php';

require '../models/Cursos.php';
require '../models/Profesores.php';


require '../views/AsignoProfCurs.php';
require '../views/RegistroOk2.php';

$mcur = new Cursos();
$mpro = new Profesores();

if(isset($_POST['Flag']))
{
	$mcur->AsignarCurso(
							$_POST['Curso'],
							$_POST['Profesor']
							
	);
	
	$v = new RegistroOk2();
	
}

else{

	$cursos = $mcur->getCur();
	$profes = $mpro->getPro();

	$v = new  AsignoProfCurs();
	$v->cursos = $cursos;
	$v->profes = $profes;
	

}

$v->render();

?>
