<?php

// estoy en controllers/RegistrarCurs.php


require '../fw/fw.php';
require '../models/Cursos.php';
require '../views/RegistroCurs.php';
require '../views/RegistroOk2.php';

$mcur = new Cursos();

if(isset($_POST['Flag']))
{
	$mcur->RegistrarCurso(
							$_POST['Nombre'],
							$_POST['Descripcion'],
							$_POST['Area'],
							$_POST['Valor'],
	);
	
	$v = new RegistroOk2();
	
}

else{

	$v = new RegistroCurs();
	

}

$v->render();

?>
