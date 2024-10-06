<?php
	include("conexion.php");
	
	$tecno_mecanica = $_GET['tecno_mecanica'];
	
	$sql = "SELECT * FROM vehiculo WHERE tecno_mecanica = '$tecno_mecanica '";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Actualizar Datos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/img/logop.png" rel="icon">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<!--===============================================================================================-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/logob.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="updatecondu.php">
					<span class="login100-form-title">
                        MODIFICAR VEHICULO
					</span>

					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tarjeta_propiedad" placeholder="Ingresar tarjeta"  value="<?php echo $row['tarjeta_propiedad']; ?>"  required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
					</div>

					<input type="hidden" id="tarjeta_propiedad" name="tarjeta_propiedad" value="<?php echo $row['tarjeta_propiedad']; ?>" />

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="seguro" placeholder="Ingresar el seguro"  value="<?php echo $row['seguro']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="placa" placeholder="Ingresar placa"  value="<?php echo $row['placa']; ?>"  required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
							<i class="bi bi-badge-ad"aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tecno_mecanica" placeholder="Ingrese la TecnoM" value="<?php echo $row['tecno_mecanica']; ?>" required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
							<i class="bi bi-badge-ad"aria-hidden="true"></i>
						</span>
					</div>
                   
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="marca" placeholder="ingrese la marca" value="<?php echo $row['marca']; ?>" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-phone" aria-hidden="true"></i>
						
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="color" placeholder="Ingrese color"  value="<?php echo $row['color']; ?>" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-map-o" aria-hidden="true"></i>
						
						</span>

						
					</div>


					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="capacidad" placeholder="Ingrese la capacidad"  value="<?php echo $row['capacidad']; ?>"required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-credit-card-2-front-fill"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Modificar
						</button>
					</div>
					<br>
					
					<center><a class="txt2" href="vehiculo.php">
						<h3><i class="bi bi-arrow-left-square-fill"></i></h3>
					</a></center>

					
				</form>
			</div>
		</div>
	</div>
	