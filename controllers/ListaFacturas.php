<?php

// controllers/ListarFacturas.php

require '../fw/fw.php';
require '../models/Facturas.php';
require '../views/ListadoFacturas.php';

$mfac = new Facturas();
$facturas = $mfac->getFacturas();

$v = new ListadoFacturas();
$v->fac = $facturas;
$v->render();
