
<!-- // estoy en html/ListadoProfesoresCursos.php -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> El profesor dicta </title>
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
        <a class="nav-link font-weight-bold" href="lista-profesores">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="cerrar-sesion">Logout</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="containertext-body mx-5 px-5 my-5">
<?php if(isset($this->profesorescursos[0]['nombre'])  )  {?>
	<h1 class="text-center mx-5 px-5 my-5 py-3">El Profesor <?= $this->profesorescursos[0]['nombre']?> <?= $this->profesorescursos[0]['apellido']?> dicta </h1>

			
			<?php foreach ($this->profesorescursos as $pc) { ?>
				<ul class="h4">
					<li > <?=$pc['Curso']?> </li>
				</ul>
				<br>

			<?php } } else {?>
   
        <h1 class="text-center mx-5 px-5 my-5 py-3">El profesor no registra cursos</h1>
      <?php } ?>
</div>		
</body>
</html>