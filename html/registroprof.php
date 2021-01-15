
<!-- estoy en html/registroprof.php -->

<!DOCTYPE html>
<html lang="es">
<head>

	<title> Registro de Profesor</title>

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
	<h1>Registro profesores: Completar el formulario para obtener un usuario. </h1>

	<form action="" method='post' id="formulario">
		<fieldset>
			<legend><strong>Datos Personales</strong></legend>
				<label for="Nomalum" id="Nomalum">Nombre: </label>
				<input type="text" id="Nomalum" name="Nombre" placeholder="Escribir Nombre" required />

				<br/>
				<br/>

				<label for="Apealum" >Apellido: </label>
				<input type="text" id="Apealum" name="Apellido" placeholder="Escribir Apellido" required />

				<br/>
				<br/>

				<label for="Tdoc" >Tipo de Documento: </label>
				<select id="Tdoc" name="Tdoc" required>
				<option value=""> Seleccione una Opcion... </option>
				<option value="DNI"> DNI </option>	
				<option value="Pasaporte"> Pasaporte </option>
				<input type="text" id="Docalum" minlength="6" maxlength="12"  name="Ndoc" placeholder="Escribir N° de documento"required />

				<br/>
				<br/>	

				<label for="Edaalum">Edad: </label>
				<input type="number" id="Edaalum" name="Edad" step="1" max="99" placeholder="Escribir Edad" required />
				
				<br/>
				<br/>

				<label for="Telalum">Telefono: </label>
				<input type="text" id="Telalum" name="Telefono" placeholder="Escribir Telenfono" minlength="8" maxlength="20" required />

				<br/>
				<br/>

		
		</fieldset>

				<br/>

		<fieldset>
		<legend><strong>Usuario y Contraseña</strong></legend>
				<label for="mail">Email Institucional: </label>
				<input type="text" id="mail" name="Email" placeholder="Nombre de Usuario" minlength="6" maxlength="30" required /><label for="mail">@ic.com</label>

				<br/>
				<br/>

				<label for="pass1">Contraseña: </label>
				<input type="password" id="pass1" name="Pass" placeholder="Escribir Contraseña" minlength="6" maxlength="50" onclick="ocultar()" required />
				<input type="password" id="pass2" name="Configcontraseña" placeholder="Confirmar Contraseña" onclick="ocultar()" required />
				<button type="button"  title="mostrar contraseña" id="pas" onclick="mostrarContra()" ><i id="eye" class="fas fa-eye-slash"></i></button>
				<div id="epass"  style="display: none"  >*Ambas Contraseñas deben ser iguales.</div>
				
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
			Cancelar registro <button><a href="inicio-de-sesion" class="btn btn-secondary "> Cancelar</a></button>
		</fieldset>
		

	</form>

</body>

<script>
	var formu = document.getElementById("formulario");


	formu.onsubmit = function (){
 	var pass1 = document.getElementById("pass1").value;
   	var pass2 = document.getElementById("pass2").value;
   	if (pass1 == pass2)
   	{
   		return true;
   	}
   	else{
   		document.getElementById("epass").style.display="block";
   		return false;
   	}
	}

	function ocultar(){

		document.getElementById("epass").style.display="none";
	}

		window.addEventListener("load", function() {
		formu.Telefono.addEventListener("keypress", soloNumeros, false);
		});


		function soloNumeros(e){
  			var key = window.event ? e.which : e.keyCode;
  			if (key < 48 || key > 57) {
    			e.preventDefault();
  			}
		}


  function mostrarContra(){
      var tipo1 = document.getElementById("pass1");
      var tipo2 = document.getElementById("pass2");
      var tipo3 = document.getElementById("pas");
 	  var tipo4 = document.getElementById("eye");
      if(tipo1.type == "password" && tipo2.type == "password" ){

          tipo1.type = "text";
          tipo2.type = "text";
          tipo3.title = "ocultar contraseña";
     	  tipo4.className = "fas fa-eye";

      }else{

          tipo1.type = "password";
          tipo2.type = "password";
          tipo3.title = "mostrar contraseña";
    	  tipo4.className = "fas fa-eye-slash";

      }
  }
</script>

</html>
