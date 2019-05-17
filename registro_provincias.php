<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Provincia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include("nav.php");?>  
	<div class="container">
		<div class="content">
			<h2>Lista de Provincias</h2>
			<hr />
			<br />
			<a href="#addProvinciaModal" class="btn btn-success" data-toggle="modal"><span>Agregar Nueva Provincia</span></a>
			<div class='clearfix'></div>
			
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
		</div>
	</div>
	<?php include("footer.php");?>  
	<!-- Add Modal HTML -->
	<?php include("modal/modal_nuevo_provincia.php");?>
	<!-- Edit Modal HTML -->
	<?php include("modal/modal_modificar_provincia.php");?>
	<!-- Delete Modal HTML -->
	<?php include("modal/modal_eliminar_provincia.php");?>
	<?php include("modal/login.php");?>
	<script src="js/script_provincia.js"></script>
</body>
</html>