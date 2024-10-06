
	<?php
	
	include("conexion.php");


$dni = $_POST['id'];
$names = $_POST['nombre_ruta'];
$noapren= $_POST['noAprendices'];
$horar= $_POST['horario'];
$date= $_POST['fecha'];
$horal= $_POST['hora_llegada'];
$horas = $_POST['hora_salida'];
$namesc = $_POST['nombre_condu'];
$ubic = $_POST['ubicacion'];
$plase = $_POST['placa'];



	



	
	
	
	$sql = "UPDATE rutas SET id='$dni', nombre_ruta='$names', noAprendices='$noapren', horario='$horar', fecha='$date', hora_llegada='$horal', hora_salida='$horas', nombre_condu='$namesc',ubicacion='$ubic' , placa='$plase' WHERE id='$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="tablarutas.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

