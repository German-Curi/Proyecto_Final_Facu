
<!-- estoy en html/asignoprofcurs.php -->

<!DOCTYPE html>
<html lang="es">
<head>

	<title> Asignacion De Profesores a Cursos</title>

	<!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/31c0322ec0.js" crossorigin="anonymous"></script>
	<!-- CSS -->        
	  <link rel="stylesheet" href="html\css\animacion.css"/>
    <link rel="stylesheet" href="html\css\estilos.css"/> 
    <link rel="icon" type="image/png" href="images\ic.png">
    <style type="text/css">
    	a{
    		text-decoration: none;
    		color: black;
    	}
    </style>
</head>
<body>
	<h1> Asignacion De Profesores a Cursos </h1>

	<form action="" method='post' id="formulario">
		<fieldset>
			<legend><strong>Asignacion de Cursos </strong></legend>

				<label for="Curso" >Seleccione Curso: </label>
				<select name="Curso" id="Curso" required >

				<option value=""  selected>Seleccione Curso...</option>
				<?php foreach($this->cursos as $c) { ?> 

					<option value="<?= $c['ID_Curso'] ?>">
						<?= $c['Nombre'] ?>
					</option>

				<?php } ?>
				</select>
				<div>*Cursos disponibles sin profesores.</div>
				

				<br/>
	

				<label for="profes" >Seleccione Profesor: </label>

					<select name="Profesor" id="profes" required>

				<option value=""  selected>Seleccione Profesor...</option>
				<?php foreach($this->profes as $p) { ?> 

					<option value="<?= $p['ID_Profesor'] ?>">
						<?= $p['Nombre']." ". $p['Apellido'] ?>
					</option>

				<?php } ?>
				</select>

				<div>*Profesores con menos de dos cursos.</div>
			

				<br/>
		

		
		</fieldset>
		
		<br/>
		<br/>

		<fieldset>

			<legend><strong>Confirmacion y Asignacion</strong></legend>
			<label>Si desea resetear el formulario:</label>
			<button type="reset" >Borrar Campos</button>

			<br/>
			<br/>
			<input type="hidden" name="Flag" value="1">

			<label>Confirmacion y Asignacion:</label>	
			<input type='submit' value='Asignar' /><br><br>
			Cancelar registro <button> <a href="menu-principal" class="btn btn-secondary "> Cancelar</a> </button>
		</fieldset>
		

	</form>

</body>

</html>
