<?php

// controllers/InscribirAlumno.php

require '../fw/fw.php';
require '../models/inscripcionalumno.php';
require '../models/Alumnos.php';
require '../views/InscripcionCursos.php';

$malu = new Alumnos();
$mins = new InscripcionAlumno();

$id = $malu->valId($_POST['Id_Alu']);

$cursos = $mins->InscribirCursos($id);
$dias= $mins->InscribirDias($id);
$turnos= $mins->InscribirTurnos();

$alucursos = $malu->getCursos($id);



$v = new InscripcionCursos();
$v->cursos = $cursos;
$v->datosalum=$alucursos;
$v->dias=$dias;
$v->turnos=$turnos;
$v->render();







