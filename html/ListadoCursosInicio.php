<!-- html/ListadoCursos.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title> Login </title>

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
    
    <style type="text/css">
      

      #cursos ul {
    		list-style:none;
    		float: left; ;
    		text-align: center;
    		font-size: 20px;
    	}

    </style>

</head>
<body>
    <section id="cursos">
        <br>
     <div class="container">
        <br>
        <h1 class="text-center">Cursos</h1>
            <?php foreach($this->cursos as $c) { ?>
            <ul class="mx-2">
                <li class="mx-5"><img class = "foto list-group-item list-group-item-secondary mx-5" src = "images\<?php echo $c['Imagen'];?>"></li> 
                <li class="text-danger px-3"><?=$c['Nombre']?></li>
            </ul>
            <?php } ?>
    </div>
    </section>
    
</body>
</html>

