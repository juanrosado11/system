
	<?php
	
	include("conexion.php");


	$id = $_POST['id'];
	$dni = $_POST['id'];
    $cedula = $_POST['cedula'];
    $names = $_POST['nombres'];
    $apel= $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $ruta= $_POST['ruta_asignada'];
    $licencia = $_POST['licencia'];
  


	



	
	
	
	$sql = "UPDATE conductores SET id='$dni', cedula='$cedula', nombres='$names', apellidos='$apel', telefono='$telefono', ruta_asignada='$ruta', licencia='$licencia' WHERE id='$id'";
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
					
					<a href="tablacondu.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

