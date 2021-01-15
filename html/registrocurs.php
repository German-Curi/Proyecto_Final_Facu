
<!-- estoy en html/registrocurs.php -->

<!DOCTYPE html>
<html lang="es">
<head>

	<title> Registro de Cursos</title>

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
	<h1>Registro de Cursos </h1>

	<form action="" method='post' id="formulario">
		<fieldset>
			<legend><strong>Datos de Cursos </strong></legend>
				<label for="Nomalum" id="Nomalum">Nombre: </label>
				<input type="text" id="Nomalum" name="Nombre" placeholder="Escribir Nombre" required />

				<br/>
				<br/>

				<label for="desc" >Descripcion: </label>
				<br/>
				<textarea id="desc" name="Descripcion" rows="2" cols="50"  placeholder="Escribir Descricion (maximo 100 caracteres)" maxlength="100"  required></textarea>
				

				<br/>
				<br/>	

				<label for="area">Area: </label>
				<input type="text" id="area" name="Area"  placeholder="Escribir Area" required />
				
				<br/>
				<br/>

				<label for="valor">Valor del Curso: $ </label>
				<input type="number" id="valor" name="Valor" placeholder="Escribir Valor en pesos" required />

				<br/>
				<br/>

		
		</fieldset>
		
		<br/>
		<br/>

		<fieldset>

			<legend><strong>Confirmacion y Registro</strong></legend>
			<label>Si desea resetear el formulario:</label>
			<button type="reset" >Borrar Campos</button>

			<br/>
			<br/>
			<input type="hidden" name="Flag" value="1">

			<label>Confirmacion y Registro:</label>	
			<input type='submit' value='Registrarse' /><br><br>
			Cancelar registro <button> <a href="menu-principal" class="btn btn-secondary "> Cancelar</a> </button>
		</fieldset>
		

	</form>

</body>

</html>
