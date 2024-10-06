<?php
	
	include("conexion.php");


	$tarjeta_propiedad = $_POST['tarjeta_propiedad'];
	$seguro = $_POST['seguro'];
    $placa = $_POST['placa'];
    $tecno_mecanica = $_POST['tecno_mecanica'];
    $marca= $_POST['marca'];
    $color = $_POST['color'];
    $capacidad= $_POST['capacidad'];
    
  


	



	
	
	
	$sql = "UPDATE vehiculo SET tarjeta_propiedad='$tarjeta_propiedad', seguro='$seguro ', placa='$placa', tecno_mecanica='$tecno_mecanica', marca='$marca', color='$color', capacidad='$capacidad' WHERE tecno_mecanica ='$tecno_mecanica '";
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
					
					<a href="vehiculo.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

