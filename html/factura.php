<!-- html/factura.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
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
      </style>
</head>
<body>

	<h1>Facturacion de curso</h1>

	<h2>Completar el siguiente formulario, para completar la inscripcion y el abono del curso</h2>

		<form action="confirmar-factura" method="post" id="formulario">

			<input type="hidden" name="Id_Alu" value="<?= $_POST['Id_Alu']?>">
			
			<input type="hidden" name="Curso" value="<?= $_POST['Curso']?>">

			<input type="hidden" name="Dia" value="<?= $_POST['Dia']?>">
                     
			<input type="hidden" name="Turno" value="<?= $_POST['Turno']?>">	

			<?php foreach($this->alumdat as $a) { ?>

				<label for="Nomalum" id="Nomalum">Nombre: </label>
				<input type="text" id="Nomalum" name="Nombre" value="<?= $a['Nombre'] ?>" disabled="disabled" />

				<br/>
				<br/>

				<label for="Apealum" >Apellido: </label>
				<input type="text" id="Apealum" name="Apellido" value="<?= $a['Apellido'] ?>" disabled="disabled" />

				<br/>
				<br/>

				<label for="Tdocalum" >Tipo de Documento: </label>
				<input type="text" id="Tdocalum"  name="Tipo de Documento" value="<?= $a['Tipo_Documento'] ?>" disabled="disabled" />
				<label for="Docalum" >Numero de Documento: </label>
				<input type="text" id="Docalum"  name="Numero de Documento" value="<?= $a['Num_Documento'] ?>" disabled="disabled" />

				<br/>
				<br/>	

				<label for="Edaalum">Edad: </label>
				<input type="text" id="Edaalum" name="Edad" value="<?= $a['Edad'] ?>" disabled="disabled" />
				
				<br/>
				<br/>

				<label for="Telalum">Telefono: </label>
				<input type="text" id="Telalum" name="Telefono" value="<?= $a['Telefono'] ?>" disabled="disabled" />

			<?php } ?>

			<br/>
			<br/>

			<label for="Nfactura">Numero de Factura: </label>
			<input type="text" id="Nfactura" name="Nfactura" value="<?= $this->numserie[0]['Numero_Factura']+1 ?>" disabled="disabled"/>


			<br/>
			<br/>

			<label for="Tfactura">Tipo de Factura: </label>
			<select id="Tfactura" name="Tfactura" required>

			<option value=""> Seleccione una Opcion... </option>
			<option value="A"> A </option>	
			<option value="B"> B </option>
			<option value="C"> C </option>	

			</select>


			<br/>
			<br/>

			<label for="Fpago">Forma de Pago: </label>
			<select  id="Fpago" name="Fpago" onchange="pago()">

			<option id="selpago" value="0">Seleccione una Opcion...</option>
			<option id="tc" value="TarjetadeCredito">Tarjeta de Credito</option>	
			<option id="ef" value="Efectivo">Efectivo</option>
				
			</select>

			<br/>
			<br/>

			<?php foreach($this->sacarmonto as $s) { 
				 if ($s['ID_Curso']==$_POST['Curso']) {
					$curso= $s['Nombre'];
					$monto= $s['Valor']; 
				 } 
			 } ?>

			<fieldset  id="Tablaef" style="display: none">

				<legend>Forma de pago: Efectivo</legend>
		
				<br/>

				<label for="curso">Curso: </label>
				<input type="text" id="curso" name="NomCurso" value="<?= $curso ?>" disabled="disabled"/>

				<br/>
				<br/>
				
				<label for="monto" id="mon">Valor en efectivo del curso: $ </label>
				<input  id="monto" type="text" name="Monto" value="<?= $monto ?>" disabled="disabled"/>

				<br/>
				<br/>

				<input type="submit" value="Abonar y Inscribirse" />

			</fieldset>

			<fieldset id="Tablatc" style="display: none">

				<legend>Forma de pago: Tarjeta de Credito</legend>

				<br/>

				<label for="Ttarjeta">Tarjeta de:</label>
				<select id="Ttarjeta" name="Ttarjeta"  required>

				<option value=""> Seleccione una Opcion... </option>
				<option value="Visa"> Visa </option>	
				<option value="Mastercard"> Mastercard </option>

				</select>

				<br/>
				<br/>

				<label for="Ntarjeta">Numero de Tarjeta: </label>
				<input type="text" id="Ntarjeta" name="Numerotarjeta" placeholder="Introducir N° de tarjeta" minlength="16" maxlength="16" required>

				<br/>
				<br/>

				<label for="curso">Curso: </label>
				<input type="text" id="curso" name="NomCurso" value="<?= $curso ?>" disabled="disabled"/>

				<br/>
				<br/>

				<label for="monto" id="mon">Valor con tarjeta de credito del curso: $</label>
				<input  id="monto" type="text" name="Monto" value="<?= $monto ?>" disabled="disabled"/>

				<br/>
				<br/>

				<input type="submit" value="Abonar y Inscribirse" />

			</fieldset>
		
		</form>

		<br/>
		<br/>

		<button> <a href="sesion-alumno">Salir</a> </button>


<script type="text/javascript">


	var formu = document.getElementById("formulario");

	window.addEventListener("load", function() {
		formu.Numerotarjeta.addEventListener("keypress", soloNumeros, false);
		});


		function soloNumeros(e){
  			var key = window.event ? e.which : e.keyCode;
  			if (key < 48 || key > 57) {
    			e.preventDefault();
  			}
		}

	formu.onsubmit = function (){
		var nfactura = document.getElementById("Nfactura");
		nfactura.disabled=false;
		var monto = document.getElementById("monto");
		monto.disabled=false;
	}

	function pago(){
		var fp = document.getElementById("Fpago").value;

		document.getElementById("Tablaef").style.display="none";
		document.getElementById("Tablatc").style.display="none";
		
			document.getElementById("Ttarjeta").disabled=false;
			document.getElementById("Ntarjeta").disabled=false;
	
		if (fp == "Efectivo") {
			document.getElementById("Tablaef").style.display="block";
			document.getElementById("Ttarjeta").disabled=true;
			document.getElementById("Ntarjeta").disabled=true;
			}

		if (fp == "TarjetadeCredito") {
			document.getElementById("Tablatc").style.display="block";
			}
	
	}

</script>




</body>
</html>