<!DOCTYPE html>
<html>
<head>
	<title>Confirmacion de Datos</title>
	<!-- CSS -->        
	  <link rel="stylesheet" href="html\css\animacion.css"/>
    <link rel="stylesheet" href="html\css\estilos.css"/> 
    <link rel="icon" type="image/png" href="images\ic.png">

    <style type="text/css">
      	a{
      		text-decoration: none;
      		color: black;
      	}
      	button{
      		padding-left: 20px;
      		padding-right: 20px;
      		padding-top: 10px;
      		padding-bottom: 10px;
      		margin-left: 50px; 
      		
      	}
      	.conf{
      		padding-left: 20px;
      		padding-right: 20px;
      		padding-top: 10px;
      		padding-bottom: 10px;
      		margin-left: 50px; 
      		
      	}

      </style>
</head>
<body>
	<h3>Por favor verifique los datos ingresado, de ser correctos aceptar la operacion<stront></h3>

	<fieldset>
		<legend>Datos personales</legend>
			
			<ul>

			<?php foreach($this->alumdat as $a) { ?>
				<li>Nombre: <strong> <?= $a['Nombre'] ?>. </strong>  </li>
				<li>Apellido: <strong><?= $a['Apellido'] ?>. </strong> </li>
				<li>Numero de <?= $a['Tipo_Documento'] ?>: <strong> <?= $a['Num_Documento'] ?>. </strong></li>
				<li>Telefono: <strong><?= $a['Telefono'] ?>. </strong> </li>
				<li>Email Insititucional: <strong><?= $a['Email'] ?>. </strong> </li>
			<?php } ?>

			</ul>

		</fieldset>

		</br>

		<fieldset>
			<legend>Datos del Curso</legend>

			<ul>

			<?php foreach($this->curso as $c) { ?>
				<?php if($c['ID_Curso']==$_POST['Curso']) {?>
					<li>Nombre: <strong> <?= $c['Nombre'] ?>. </strong> </li>
					<li>Area: <strong> <?= $c['Area'] ?>. </strong> </li>
				<?php } ?>
			<?php } ?>

			<?php foreach($this->dia as $d) { ?>
				<?php if($d['ID_Dia']==$_POST['Dia']) {?>
					<li>Dia: <strong> <?= $d['Dia'] ?>. </strong> </li>
				<?php } ?>
			<?php } ?>

			<?php foreach($this->turno as $t) { ?>
				<?php if($t['ID_Turno']==$_POST['Turno']) {?>
					<li>Turno: <strong> <?= $t['Turno'] ?>. </strong> </li>
				<?php } ?>
			<?php } ?>

			</ul>

		</fieldset>

		</br>

		<fieldset>

		<legend>Datos de Factura</legend>
		
			<ul>
	
				<li>N° Factura: <strong> <?= $_POST['Nfactura'] ?>. </strong> </li>
				<li>Tipo de Factura: <strong> <?= $_POST['Tfactura'] ?>. </strong> </li>

				<?php if ($_POST['Fpago']=="TarjetadeCredito") {?>

					<li>Forma de pago: <strong> Tarjeta De Credito. </strong> </li>
					<li>Tipo de tarjeta: <strong>  <?= $_POST['Ttarjeta'] ?>. </strong> </li>
					<li>N° de tarjeta: <strong>  <?= $_POST['Numerotarjeta'] ?>. </strong> </li>
					<li>Valor del curso: <strong>  <?= $_POST['Monto'] ?>. </strong> </li>

				<?php } ?>

					<?php if ($_POST['Fpago']=="Efectivo") {?>

					<li>Forma de pago: <strong> Efectivo. </strong> </li>
					<li>Valor del curso: <strong>  <?= $_POST['Monto'] ?>. </strong> </li>

				<?php } ?>
	
			</ul>

		</fieldset>
		
		</br>
		</br>

<form action="" method="post" id="formulario">

	<input type="hidden" name="Flag" value="1">

	<input type="hidden" name="Id_Alu" value="<?= $_POST['Id_Alu']?>">
			
	<input type="hidden" name="Curso" value="<?= $_POST['Curso']?>">

	<input type="hidden" name="Dia" value="<?= $_POST['Dia']?>">
                     
	<input type="hidden" name="Turno" value="<?= $_POST['Turno']?>">	

	<input type="hidden" name="Serie_Factura" value="<?= $_POST['Tfactura']?>">

	<input type="hidden" name="Numero_Factura" value="<?= $_POST['Nfactura']?>">	

	<input type="hidden" name="Forma_Pago" value="<?= $_POST['Fpago']?>">

	<?php if($_POST['Fpago']=="TarjetadeCredito") {?>

	<input type="hidden" name="Tipo_Tarjeta" value="<?= $_POST['Ttarjeta']?>">

	<input type="hidden" name="Numero_Tarjeta" value="<?= $_POST['Numerotarjeta']?>">	

	<?php } ?>

	<input type="hidden" name="monto_total" value="<?= $_POST['Monto']?>">

	<input type="submit" value="Confirmar" class="conf"/>

<form/>

<a href="sesion-alumno">Cancelar</a>


</body>
</html>