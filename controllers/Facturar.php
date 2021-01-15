<?php

// controllers/Facturar.php

require '../fw/fw.php';
require '../models/Alumnos.php';
require '../models/inscripcionalumno.php';
require '../models/Facturas.php';
require '../views/Factura.php';

$malu = new Alumnos();
$id = $malu->valId($_POST['Id_Alu']);

$aludatos = $malu->getDatos($id);

$mins = new InscripcionAlumno();
$curso = $mins->InscribirCursos($id);

$mfac = new Facturas();
$nserie = $mfac->NumeroFactura();

$v = new Factura();
$v->alumdat = $aludatos;
$v->sacarmonto = $curso;
$v->numserie = $nserie;

$v->render();







