<?php

// controllers/ConfirmarFactura.php

require '../fw/fw.php';
require '../models/Alumnos.php';
require '../models/inscripcionalumno.php';
require '../models/Facturas.php';
require '../views/Comprobacion.php';
require '../views/ComprobacionOk.php';

$malu = new Alumnos();
$mins= new InscripcionAlumno();

$id = $malu->valId($_POST['Id_Alu']);

if(isset($_POST['Flag']))
{

$maltafactura = new Facturas();

/*
if(!isset($_GET['Serie_Factura'])) die("error validacion Serie Factura");
if(!isset($_GET['Numero_Factura'])) die("error validacion Numero Factura");

if(!isset($_GET['Forma_Pago'])) die("error validacion Forma Pago");
*/
	if ($_POST['Forma_Pago']=="Efectivo") {

	//if(!isset($_GET['monto_total'])) die("error validacion monto total");

		$mins->DarAltaAlumno(	$id,
									$_POST['Curso'],
									$_POST['Dia'],
									$_POST['Turno']);

		$maltafactura->DarAltaFacturaEfectivo(	$id,
												$_POST['Serie_Factura'], 
										  		$_POST['Numero_Factura'], 
										  		$_POST['Forma_Pago'], 
										  		$_POST['monto_total'] );
	
	}

	if ($_POST['Forma_Pago']=="TarjetadeCredito") {
	
	/*if(!isset($_GET['Tipo_Tarjeta'])) die("error validacion Tipo Tarjeta");
	if(!isset($_GET['Numero_Tarjeta'])) die("error validacion Numero Tarjeta");
	if(!isset($_GET['monto_total'])) die("error validacion monto total");
	*/
		$mins->DarAltaAlumno(	$id,
									$_POST['Curso'],
									$_POST['Dia'],
									$_POST['Turno']);

		$maltafactura->DarAltaFacturaTarjeta(	$id,
												$_POST['Serie_Factura'], 
										  		$_POST['Numero_Factura'],
										  		$_POST['Tipo_Tarjeta'],
										 		$_POST['Numero_Tarjeta'],
										  		$_POST['monto_total'] );
	}

$v= new ComprobacionOk();

}

else{

	$aludatos = $malu->getDatos($id);

	$curso = $mins->InscribirCursos($id);
	$dia = $mins->InscribirDias($id);
	$turno = $mins->InscribirTurnos();

	$v = new Comprobacion();
	$v->alumdat = $aludatos;
	$v->curso = $curso;
	$v->dia = $dia;
	$v->turno = $turno;
}

$v->render();
