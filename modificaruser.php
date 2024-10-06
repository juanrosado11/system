<?php
	include("conexion.php");
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
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

				<form class="login100-form validate-form" method="post" action="updateuser.php">
					<span class="login100-form-title">
                        REGISTRO DE USUARIO
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="dni" placeholder="Ingrese su id" value="<?php echo $row['id']; ?>" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
					</div>

                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="cedula" placeholder="Ingrese su cedula" value="<?php echo $row['cedula']; ?>" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-credit-card-2-front-fill"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text"  d="inputEmailAddress" name="usuario" value="<?php echo $row['usuario']; ?>" placeholder="cree su Usuario" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-person-circle"aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email"  name="correo" value="<?php echo $row['correo']; ?>" placeholder="ingrese su correo" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="bi bi-at"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input" >
						<input class="input100" id="inputPassword" name="password" type="password" placeholder="cree  su Contraseña"  value="<?php echo $row['password']; ?>" required >
						<span id="show-hide-passwd" action="hide"></span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						  
					</div>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $row['nombre']; ?>" required>
						<ion-icon name="person-outline"></ion-icon>
						<span class="symbol-input100">
							<i class="bi bi-badge-ad"aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tipo_usuario" placeholder="tipo usuario = 1  &  2"  value="<?php echo $row['tipo_usuario']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-info" aria-hidden="true"></i>
						</span>
					</div>
                  
					
					<div class="container-login100-form-btn">
						<button  type="submit"  class="login100-form-btn" typy >
						actualizar
						</button>
					</div>
					<br>
					
					
					<center><a class="txt2" href="tables.php">
						<h3><i class="bi bi-arrow-left-square-fill"></i></h3> 
					</a></center>

					
				</form>
			</div>
		</div>
	</div>
	