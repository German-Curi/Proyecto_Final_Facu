<!-- html/MenuPrincipal.php -->

<?php
	
	session_start();

	if(!isset($_SESSION['admin']))
	{
		header('Location: inicio-de-sesion');
		exit;
	}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> Menu Principal </title>

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
  
  	<a  href="" class="navbar-brand text-danger font-weight-bold">
  		ic
  	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
      <strong class="text-primary">MENU</strong>
    </button>
  <div class="collapse navbar-collapse" id="nav">
    <ul class="navbar-nav ml-auto">
		<li class="nav-item"> 
			<a class="nav-link font-weight-bold" href="cerrar-sesion"> Logout</a> 
		</li>
    </ul>
  </div>
</nav>

	<h1 class="text-center px-5 py-5 mx-5 my-5"> Menu Principal </h1>

<div class="container text-center">
     <a class="btn btn-secondary mx-5" href="lista-facturas">Lista Facturas</a> 
      
	 <a class="btn btn-secondary mx-5" href="lista-alumnos">Lista Alumnos</a> 
		
	 <a class="btn btn-secondary mx-5"  href="lista-cursos">Lista Cursos</a> 
		
	 <a class="btn btn-secondary mx-5" href="lista-profesores">Lista Profesores</a>

	 <br/> 	<br/> 

	 <a class="btn btn-secondary mx-5" href="registrarcurs">Agregar Cursos</a>

	 <a class="btn btn-secondary mx-5" href="asignarprofcurs">Asignar cursos a profesores</a>
</div> 
		

	
</body>
</html>
