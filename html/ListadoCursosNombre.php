<!-- // estoy en html/ListadoCursosNombre.php -->
<!-- Modificar css  -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title> Cursos </title>
</head>

<body>

	<br/><br/>

	<table>
			<tr><th> Nombre </th><th> Descripcion </th><th> Area </th><th> Valor </th></tr>

			<?php foreach ($this->cursosnombre as $cn) { ?>
			
				<tr><td><?=$cn['Nombre']?></td> <td><?=$cn['Descripcion']?></td> <td><?=$cn['Area']?></td> <td><?=$cn['Valor']?></td></tr>
			
			<?php } ?>
	</table>

	<br/>
	<a href="lista-cursos"> Volver </a>
	<br/>

</body>
</html>