<?php 

require '../fw/fw.php';
require '../models/Cursos.php';
require '../views/ListadoCursosInicio.php';

$m = new Cursos();
$todos = $m->getTodos();

$vc = new ListadoCursosInicio();
$vc->cursos = $todos;
$vc->render();
 