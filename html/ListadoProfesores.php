
<!-- // estoy en html/ListadoProfesores.php -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> Listado Profesores </title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- CSS -->        
	  <link rel="stylesheet" href="html\css\animacion.css"/>
    <link rel="stylesheet" href="html\css\estilos.css"/> 
    <link rel="icon" type="image/png" href="images\ic.png">

    <style type="text/css">

	 	tr.link {
 			cursor: pointer;
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
        <a class="nav-link font-weight-bold" href="menu-principal">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>

	<div class="containertext-body mx-5 px-5 my-5">

	<h1 class="text-center mx-5 px-5 my-5 py-3">Listado Profesores </h1>

	
	<form action="lista-profesores" method="get">
		<label for="nombre" class="h6"> Buscar: (Para buscar, ingrese apellido del Profesor) </label>
			<input type="text" name="apellidoprofe" id="apellido" />
			<input type="submit" value="Buscar" />	
	<form/>

	<br/><br/>
<div class=" table-responsive ">
	<table class="table table-bordered table-striped table-light table-sm">
		<tr class="text-center">
			<th> Nombre </th>
			<th> Apellido </th>
			<th> Tipo Documento </th>
			<th> Numero Documento </th>
			<th> Edad </th><th> Telefono </th>
			<th> Mail </th>
		</tr>

			<?php foreach ($this->profesores as $p) { ?>
			
				<tr  class="link" onclick="location='lista-profesores?profe=<?=$p['ID_Profesor']?>'">
					<td><?=$p['Nombre']?></td> 
					<td><?=$p['Apellido']?></td> 
					<td><?=$p['Tipo_Documento']?></td> 
					<td><?=$p['Num_Documento']?></td> 
					<td><?=$p['Edad']?></td> 
					<td><?=$p['Telefono']?></td> 
					<td><?=$p['Email']?></td>
				</tr>
			</th>
			<?php } ?>
	</table>
</div>


</body>
</html>