<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: inciar.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TRMSYSTEM</title>
        <link href="assets/img/logop.png" rel="icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <div class="logo">
        <a href="zadmin.php"class="logo me-auto me-lg-0"><img src="assets/img/logob.png" alt=""width="70" height="60" class="img-fluid"></a>
      </div>
      <a class="navbar-brand ps-3" href="zadmin.php">Panel de Control</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $nombre ?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        
                        <li><a class="dropdown-item" href="logout.php"<i class='far fa-edit' style='font: size 45px;color:#FF5733 '></i> Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Zona</div>
                            <a class="nav-link" href="zadmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Administrativa
                            </a>
                            
                            <?php if($tipo_usuario == 1) { ?>
                            
                            <div class="sb-sidenav-menu-heading">Tablas</div>
                           
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Opciones
                            </a>
                        </div>
                    </div>
                    
                    <?php } ?>
                    <?php if($tipo_usuario == 2) { ?>
                    <div class="sb-sidenav-menu-heading">Menú Principal</div>
									<a class="nav-link" href="tables.php"
									><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
										Usuarios</a
									><a class="nav-link" href="tabla_aprendices.php"
									><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
										Datos Aprendiz</a
									>
						</div>
					</div>
                    <?php } ?>
                    <div class="sb-sidenav-footer">
                        <div class="small">Siguenos:</div>
                        @Trmsystem
                    </div>
                </nav>
                
            </div>
            
            <div id="layoutSidenav_content">
                   <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Zona Administrativa</h1>
                        <h1>   Bienvenido  <?php echo  $nombre ?>   ya puede manejar nuestro sistema de admin  </h1>
                        <img src= "assets/img/slide/bus01.png"width="1200" height="900">
                    </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
