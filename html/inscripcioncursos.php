<!-- html/inscripcioncursos.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Sesion Alumno</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- CSS -->        
	  <link rel="stylesheet" href="html\css\animacion.css"/>
    <link rel="stylesheet" href="html\css\estilos.css"/> 
    <link rel="icon" type="image/png" href="images\ic.png">

</head>
<body>

	<nav class="navbar navbar-expand-lg  bg-dark fixed-top">
  
  	<a  href="#home" class="navbar-brand text-danger font-weight-bold">
  		ic
  	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
      <strong class="text-primary">MENU</strong>
    </button>
  <div class="collapse navbar-collapse" id="nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="sesion-alumno">Mis cursos</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container text-body mx-5 my-5 px-5">
	<h1 class="text-center">Incripcion a Cursos</h1>

	<br/>

		<div class="container text-center ">
		<table border="2" class="text-center bg-light">
		<tr> <th></th> <th>Lunes</th> <th>Martes</th> <th>Miercoles</th> <th>Jueves</th> <th>Viernes</th> </tr>
		
		<?php for ($i=1; $i <4 ; $i++) {  ?>

			<tr>

			<?php if($i==1) { ?> <th>Mañana</th> <?php }?>
			<?php if($i==2) { ?> <th>Tarde</th> <?php }?>
			<?php if($i==3) { ?> <th>Noche</th> <?php }?>
		
			<?php for ($j=1; $j <6 ; $j++) {  ?>

				<td id="<?=$j.$i?>">

				<?php foreach($this->datosalum as $d) { ?> 

					<?php if( $d['ID_Dia']==$j && $d['ID_Turno']==$i) { ?>
					<?= $d['Curso']?>

				<?php }}?>

				</td>

			<?php }?>	

			</tr>

		<?php }?>	
		
	</table>
	</div>
	

	<br/>
	<br/>
	<div class="container">
		<form action="facturacion" method="post" id="formulario">

			<label for="Cursos">Cursos:</label>

			<select name="Curso" id="Cursos" onchange="turnos()">

				<option value="0"  selected>Seleccione Curso...</option>
				<?php foreach($this->cursos as $c) { ?> 

					<option value="<?= $c['ID_Curso'] ?>">
						<?= $c['Nombre'] ?>
					</option>

				<?php } ?>
			</select>

			<div id="selcur" style="display: none">*Debe Seleccionar un Curso.</div>

			<br/>
			<br/>

			<label for="Dias">Dia a Cursar:</label>

			<select name="Dia" id="Dias" onchange="turnos()">

				<option value="0"  selected>Seleccione Dia...</option>
				<?php foreach($this->dias as $d) { ?> 

					<option value="<?= $d['ID_Dia'] ?>">
						<?= $d['Dia'] ?>
					</option>

				<?php } ?>
			</select>

			<div id="seldia" style="display: none">*Debe Seleccionar un Dia.</div>

			<br/>
			<br/>


			<label for="Turnos">Turno a Cursar:</label>

			<select name="Turno" id="Turnos" onchange="turnos()">

				<option value="0"  selected>Seleccione Turno...</option>
				<?php foreach($this->turnos as $t) { ?> 
	
					<?php if (($t['ID_Turno']==1) ) {?>

						<option id="Man" value="<?= $t['ID_Turno'] ?>">
							<?= $t['Turno'].' (9:00am a 13:00pm)' ?>
						</option>

					<?php } ?>

					<?php if ($t['ID_Turno']==2) {?>

						<option id="Tar" value="<?= $t['ID_Turno'] ?>">
							<?= $t['Turno'].' (14:00am a 18:00pm)' ?>
						</option>

					<?php } ?>

					<?php if ($t['ID_Turno']==3) {?>

						<option id="Noc" value="<?= $t['ID_Turno'] ?>">
							<?= $t['Turno'].' (19:00am a 23:00pm)' ?>
						</option>

					<?php } ?>

				<?php } ?>

			</select>

			<div id="seltur" style="display: none">*Debe Seleccionar un Turno</div>

			<br/>
			<br/>

			<input type="hidden" name="Id_Alu" value="<?= $_POST['Id_Alu']?>">
			
			<input type="submit" value="Incribirse" class="btn btn-secondary" />

		</form>
	</div>
	</div>
		<br/>
		<br/>


<script type="text/javascript">

	var formu = document.getElementById("formulario");

	formu.onsubmit = function (){
		var selc = document.getElementById("selcur");
		var cursos = document.getElementById("Cursos");
	
		var seld = document.getElementById("seldia");
		var dias= document.getElementById("Dias");

		var selt = document.getElementById("seltur");
		var turnos = document.getElementById("Turnos");
		
		if (parseInt(cursos.value)==0 && parseInt(dias.value)==0 && parseInt(turnos.value)==0) {
			selc.style.display = "block";
			seld.style.display = "block";
			selt.style.display = "block";
			return false;
		}

		if (parseInt(cursos.value)==0 && parseInt(dias.value)==0) {
			selc.style.display = "block";
			seld.style.display = "block";
			return false;
		}

		if (parseInt(cursos.value)==0 && parseInt(turnos.value)==0) {
			selc.style.display = "block";			
			selt.style.display = "block";
			return false;
		}

		if (parseInt(dias.value)==0 && parseInt(turnos.value)==0) {
			seld.style.display = "block";
			selt.style.display = "block";
			return false;
		}

		if (parseInt(cursos.value)==0) {
			selc.style.display = "block";
			return false;
		}


		if (parseInt(dias.value)==0) {
			seld.style.display = "block";
			return false;
		}

		if (parseInt(turnos.value)==0) {
			selt.style.display = "block";
			return false;
		}

		return true;
	}

	function turnos(){


		var dia =document.getElementById("Dias").value;
		var man =document.getElementById("Man");
		var tar =document.getElementById("Tar");
		var noc =document.getElementById("Noc");
		
		document.getElementById("selcur").style.display="none";
		document.getElementById("seldia").style.display="none";
		document.getElementById("seltur").style.display="none";
	

		man.style.display = "block";
		tar.style.display = "block";
		noc.style.display = "block";
			
	<?php foreach($this->datosalum as $d) { ?> 
		var d = '<?php echo $d['ID_Dia']; ?>';
		var t = '<?php echo $d['ID_Turno']; ?>';
		if ( parseInt(d) == parseInt(dia) )
		{	
			if(parseInt(t)==1) man.style.display = "none";
			
			if(parseInt(t)==2) tar.style.display = "none";

			if(parseInt(t)==3) noc.style.display = "none";
	
		}
	
	
	<?php } ?>

	}
</script>


</body>
</html>