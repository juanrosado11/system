







<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>Inicio de Sesion</title>
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
<link  href="assets/css/util.css" rel="stylesheet">
<link href="assets/img/logop.png" rel="icon">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">



    <!--JQUERY-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    
    
   
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

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
				<div class="login100-pic js-tilt" data-tilt="" style="will-change:transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
					<img src="assets/img/logob.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="validat.php">
					<span class="login100-form-title">
						INICIAR SESION
					</span>
                    
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text"  d="inputEmailAddress" name="usuario" placeholder="Ingrese su Usuario"  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-person-circle"aria-hidden="true"></i>
						</span>
					</div>
                    
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="inputPassword" name="password" type="password" placeholder="Ingrese su Contraseña" required>
						<span id="show-hide-passwd" action="hide"></span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						  
					</div>
					
					<div  class="container-login100-form-btn">
						
						<button type="submit"  class="login100-form-btn" >
							Iniciar
						</button>

						
						
					</div >

					

					<center><div class="text-center p-t-12">
					
						<span class="txt1">
							Olvidaste
						</span>
						<a class="txt2" href="forecuperar.php">
							Usuario/Contraseña?
						</a>
					</div></center>
					<center><a class="txt2" href="guardaruser.php">
					<h4> <i class="bi bi-person-plus-fill">  Registro Administrador </i></h4>
					</a></center>
					<center><a class="txt2" href="foregister1.php">
					<h4> <i class="bi bi-person-plus-fill">   Registro Aprendiz </i></h4>
					</a></center>
					<br>
					<center><a class="txt2" href="index.html">
					 <h1><i class="bi bi-arrow-left-square-fill"></i></h1>
					</a></center>

				
				</form>
			</div>
		</div>
	</div>
	
	<script>


            function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
	</script>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>