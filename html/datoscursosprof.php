<!-- html/datoscursosprof.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Sesion Profesor</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="icon" type="image/png" href="..\images\ic.png">

	<style type="text/css">
		body{
			background-color: lightblue;
		}
	</style>
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
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
	<h1 class="mx-5 my-5">Datos de Profesor</h1>
		<?php foreach($this->profdat as $a) { ?>
		<ul class="list-group">
		<li class="list-group-item list-group-item-secondary">Nombre de Alumno: <strong> <?= $a['Nombre'] ?>. </strong>  </li>
		<li class="list-group-item list-group-item-secondary">Apellido de Alumno:  <strong><?= $a['Apellido'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Numero de <?= $a['Tipo_Documento'] ?>: <strong> <?= $a['Num_Documento'] ?>. </strong></li>
		<li class="list-group-item list-group-item-secondary">Edad: <strong><?= $a['Edad'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Telefono: <strong><?= $a['Telefono'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Email Insititucional: <strong><?= $a['Email'] ?>. </strong> </li>

		</ul>
	<?php } ?>
	</div>


	<div class="container mt-5">
		<h1 class="mx-5">Cursos</h1>
		<?php foreach($this->cursprof as $c) { ?>
		<ul class="list-group">
		<li class="list-group-item list-group-item-secondary h4">Nombre de Curso: <strong> <?= $c['Curso'] ?>. </strong>  </li>
		<li class="list-group-item list-group-item-secondary">Descripcion de Cursada: <strong><?= $c['Descripcion'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Area: <strong> <?= $c['Area'] ?>. </strong></li>
		</ul>
		<br>
	<?php } ?>
	</div>

<!--
	<div class="container">
		<form action="inscripcion-curso" method="post" >
		<br/>
		<input type="hidden" name="Id_pro" value="<?= $a['ID_Profesor']?>">
		<input type="submit" value="Inscripcion dictamen de cursos" class="btn btn-secondary mx-5 mb-5"/>
		<br/>
	</form>
	</div>
-->

</body>
</html>