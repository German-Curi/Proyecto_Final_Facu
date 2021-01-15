
<!-- estoy en html/Login.php -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> Inicio </title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/31c0322ec0.js" crossorigin="anonymous"></script>
<!-- CSS -->        
	  <link rel="stylesheet" href="html\css\animacion.css"/>
    <link rel="stylesheet" href="html\css\estilos.css"/> 
    <link rel="icon" type="image/png" href="images\ic.png">
</head>
<body>

	<	<nav class="navbar navbar-expand-lg  bg-dark fixed-top">
  
  	<a  href="#home" class="navbar-brand text-danger font-weight-bold">
  		ic
  	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
      <strong class="text-primary">MENU</strong>
    </button>
  <div class="collapse navbar-collapse" id="nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cursos">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="inicio-de-sesion">Login</a>
      </li>
    </ul>
  </div>
</nav>

	<div class="container px-5 py-5">
		<form action="" method='post' autocomplete="false" class="text-center px-5 py-5" >
	<div class="container px-5 py-5">
		<label for="user">Usuario: </label>
		<input type='text' name='email' id="user" required minlength="6" maxlength="50" placeholder="Email" /> <br/>
		<label for="contra">Contraseña: </label>
		<input type='password' name='pass' id="pass" required  minlength="4" maxlength="50" placeholder="Contraseña" />
		<button type="button"  onclick="mostrarContra()" title="mostrar contraseña" id="pas"><i id="eye" class="fas fa-eye-slash"></i></button>
		<br/>

		<input type='submit' value='Iniciar Sesion' class="btn btn-secondary"/>
		<a href="registrar" class="btn btn-secondary "> Registrar Alumno</a>
    <a href="registrarprof" class="btn btn-secondary "> Registrar Profesor</a>
	</div>
	</form>

</body>
<script type="text/javascript">
	
  function mostrarContra(){
      var tipo1 = document.getElementById("pass");
 	  var tipo2 = document.getElementById("pas");
 	  var tipo3 = document.getElementById("eye");
      if(tipo1.type == "password" ){

          tipo1.type = "text";
     	  tipo2.title = "ocultar contraseña";
     	  tipo3.className = "fas fa-eye";

      }else{

          tipo1.type = "password";
    	  tipo2.title = "mostrar contraseña";
    	  tipo3.className = "fas fa-eye-slash";

      }
  }
</script>
</html>
