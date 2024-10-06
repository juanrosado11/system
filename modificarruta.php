<?php
	include("conexion.php");
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM rutas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario de Registro</title>
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

				<form class="login100-form validate-form" method="post" action="updateruta.php">
					<span class="login100-form-title">
                        MODIFICAR RUTAS
					</span>

					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="dni" placeholder="Ingrese su id"  value="<?php echo $row['id']; ?>"  required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
					</div>

					<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre_ruta" placeholder="Ingrese nombre de ruta" value="<?php echo $row['nombre_ruta']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-bus" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="noAprendices" placeholder="Ingrese su No aprendices" value="<?php echo $row['noAprendices']; ?>" required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
						<i class="fa fa-users" aria-hidden="true"></i>
						</span>
					</div>

					
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre_condu" placeholder="ingrese el nombre del conductor" value="<?php echo $row['nombre_condu']; ?>" required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
							<i class="bi bi-badge-ad"aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="horario" placeholder="Ingrese el  horario" value="<?php echo $row['horario']; ?>" required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
						<i class="fa fa-list-alt" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="date" name="fecha" placeholder="ingrese la fecha " value="<?php echo $row['fecha']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="time" name="hora_llegada" placeholder="ingrese la hora de llegada " value="<?php echo $row['hora_llegada']; ?>" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="time" name="hora_salida" placeholder="ingrese la hora de salida " value="<?php echo $row['hora_salida']; ?>" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						
						</span>

						
					</div>


					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="ubicacion" placeholder=" barrios trasados "  value="<?php echo $row['ubicacion']; ?>" require >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-map-signs" aria-hidden="true"></i>
						
						</span>

						
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="placa" placeholder=" placa del vehiculo" value="<?php echo $row['placa']; ?>" require >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-slack" aria-hidden="true"></i>
						
						</span>

					
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Registrarse
						</button>
					</div>
					<br>
					
					<center><a class="txt2" href="tabla_aprendices.php">
						<h3><i class="bi bi-arrow-left-square-fill"></i></h3>
					</a></center>

					
				</form>
			</div>
		</div>
	</div>
	