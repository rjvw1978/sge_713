<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Localidades</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include("nav.php");?>  
	<div class="container">
		<div class="content">
			<h2>Lista de localidades</h2>
			<hr />
			<br />
			<a href="#LocalidadModal" class="btn btn-success" data-toggle="modal"><span>Agregar Nueva Localidad</span></a>
			
			<div class='clearfix'></div>
			
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
		</div>
	</div>
	<?php include("footer.php");?>  
	<?php include("modal/modal_localidad.php");?>
	<?php include("modal/modal_eliminar.php");?> 
	<?php include("modal/modal_login.php");?>
	<script src="js/script_localidad.js"></script>
</body>
</html>
