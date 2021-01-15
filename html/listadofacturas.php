<!-- html/ListadoFacturas.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Facturas</title>
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
        <a class="nav-link font-weight-bold" href="menu-principal">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<h1 class="text-center mx-5 px-5 my-5 py-3">Listado de Facturas</h1>

	<div class=" table-responsive ">
	<table class="table table-bordered table-striped table-light table-sm">
		<tr class="text-center">
			<th>Serie Factura</th>
			<th>Numero factura</th>
			<th>Fecha</th>
      <th>Forma de Pago</th>
      <th>Marca de Tarjeta</th>
      <th>Numero de Tarjeta</th>
			<th>Monto Total</th>
      <th>Nombre Alumno</th>
			<th>Apellido Alumno</th>
      <th>Curso</th>
		</tr>

		<?php foreach($this->fac as $f) { ?>
		<tr>
      <td><?= $f['Serie_Factura'] ?></td>
      <td><?= $f['Numero_Factura'] ?></td> 
      <td><?= $f['Fecha'] ?></td>
      <td><?= $f['Forma_Pago'] ?></td> 
      <td><?= $f['Marca'] ?></td>
      <td><?= $f['Num_Tarjeta'] ?></td>
      <td><?= $f['monto_total'] ?></td>
      <td><?= $f['Nombre'] ?></td> 
      <td><?= $f['Apellido'] ?></td> 
      <td><?= $f['Curso'] ?></td>
   </tr>
		<?php } ?>

	</table>
</div>
</div>
	</br>
</body>
</html>