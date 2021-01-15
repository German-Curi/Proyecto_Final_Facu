<!-- // estoy en html/ListadoAlumnosApellidos.php -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> Alumno </title>
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
        <a class="nav-link font-weight-bold" href="lista-alumnos">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="containertext-body mx-5 px-5 my-5">

      <h1 class="text-center">Buscador</h1><br>
  <table class="table table-bordered table-striped table-light table-sm text-center">


    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
    </tr>
		<?php foreach($this->alumnosapellido as $a) { ?>
		  <tr class="link" onclick="location='lista-alumnos?alu=<?=$a['ID_Alumno']?>'">
        <td><?= $a['Nombre'] ?></td> 
        <td><?=$a['Apellido']?>
      </td> 
    </tr>
		<?php } ?>

	</table>
</div>

</body>
</html>