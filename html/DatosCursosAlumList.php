<!-- html/DatosCursosAlumList.php -->

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
        <a class="nav-link font-weight-bold" href="lista-alumnos">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>

	<div class="containertext-body mx-5 px-5 my-5 ">
	<h1 class="text-center">Datos de Alumno</h1>

	<?php foreach($this->alumdat as $a) { ?>
		<ul class="list-group">
		<li class="list-group-item list-group-item-secondary">Nombre de Alumno: <strong> <?= $a['Nombre'] ?>. </strong>  </li>
		<li class="list-group-item list-group-item-secondary">Apellido de Alumno:  <strong><?= $a['Apellido'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Numero de <?= $a['Tipo_Documento'] ?>: <strong> <?= $a['Num_Documento'] ?>. </strong></li>
		<li class="list-group-item list-group-item-secondary">Edad: <strong><?= $a['Edad'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Telefono: <strong><?= $a['Telefono'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Email Insititucional: <strong><?= $a['Email'] ?>. </strong> </li>
		</ul>
		<br>
	<?php } ?>

	<h1 class="text-center">Cursos y Profesores</h1>

		<?php foreach($this->cursprof as $c) { ?>
		<ul class="list-group">
		<li class="list-group-item list-group-item-secondary">Nombre de Curso: <strong> <?= $c['Curso'] ?>. </strong>  </li>
		<li class="list-group-item list-group-item-secondary">Descripcion de Cursada: <strong><?= $c['Descripcion'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Area: <strong> <?= $c['Area'] ?>. </strong></li>
		<li class="list-group-item list-group-item-secondary">Dias De Cursada: <strong><?= $c['Dia'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Turno: <strong><?= $c['Turno'] ?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Nombre y Apellido de Profesor: <strong><?= $c['Nombre Profesor']  ?> <?=$c['Apellido Profesor']?>. </strong> </li>
		<li class="list-group-item list-group-item-secondary">Contacto Email Profesor: <strong><?= $c['Email Profesor'] ?>. </strong> </li>
		</ul>
		<br>
	<?php } ?>

		<br/>
</div>

</body>
</html>