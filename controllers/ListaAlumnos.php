<?php

// controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Alumnos.php';
require '../views/ListadoAlumnos.php';
require '../views/DatosCursosAlumList.php';
require '../views/ListadoAlumnosApellido.php';


if(!isset($_GET['alu']) && !isset($_GET['apellidoAlu']))
{
	$a = new Alumnos();
	$todos = $a->getTodos();

	$v = new ListadoAlumnos();
	$v->alumnos = $todos;
	$v->render();
}


if(isset($_GET['alu']))
{
	$idAlu = $_GET['alu'];
	
	$ac = new Alumnos();
	$mAluDatos = $ac->getDatos($idAlu);
	$mAluCurso = $ac->getCursos($idAlu);

	$v = new DatosCursosAlumList();
	$v->alumdat = $mAluDatos;
	$v->cursprof = $mAluCurso;
	$v->render();
}

if(isset($_GET['apellidoAlu']))
{
	$apellidoAlu = $_GET['apellidoAlu'];
	
	$aa = new Alumnos();
	$maluapellido = $aa->getApellidoAlu($apellidoAlu);

	$v = new ListadoAlumnosApellido();
	$v->alumnosapellido = $maluapellido;
	$v->render();
}
