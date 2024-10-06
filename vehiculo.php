<?php  

session_start();
require 'conexion.php';

if(!isset($_SESSION['tecno_mecanica'])){
    header("Location: vehiculo.php");
}

$tecno_mecanica = $_SESSION['tecno_mecanica'];
$tarjeta_propiedad = $_SESSION['tarjeta_propiedad'];

if($tarjeta_propiedad == 1){
    $where = "";
    } else if($tarjeta_propiedad== 2){
    $where = "WHERE tecno_mecanica=$tecno_mecanica";
}




$sql = "SELECT * FROM vehiculo $where";
	$resultado = $mysqli->query($sql);


    $tarjeta_propiedad = $_SESSION['tarjeta_propiedad'];




?>   
   
   
   
   
   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VEHICULO </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="assets/img/logop.png" rel="icon">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <div class="logo">
        <a href="zadmin.php"class="logo me-auto me-lg-0"><img src="assets/img/logob.png" alt=""width="70" height="60" class="img-fluid"></a>
            </div>
        <a class="navbar-brand ps-3" href="vehiculo.php">Panel de Control</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $nombre ?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      
                        
                        
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
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
                            <div class="sb-sidenav-menu-heading">Interfaz</div>
                           
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Vehiculo
                              </a>
                              </div>
                              </div>
                              <div class="sb-sidenav-footer">
                              <div class="small">Siguenos:</div>
                             @Trmsystem
					         </div>
				             </nav>
			                 </div>
			                 <div id="layoutSidenav_content">
				             <main>
					   <div class="container-fluid">
						<h1 class="mt-4">
                            Vehiculo</h1>
						
						<div class="card mb-4">
							<div class="card-body">En este apartado podras Registrar,Consultar,eliminar y actualizar los Vehiculos de las Rutas de Transporte del Centro Biotecnólogico del Caribe. </a>.</div>
						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i> Tabla Vehiculo</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
                                                <th>Tarjeta_Propiedad</th>
                                                <th>Seguro</th>
												<th>Placa</th>
												<th>Tecno_Mecanica</th>
                                                <th>Marca </th>
                                                <th>Color</th>
                                                <th>Capacidad</th>
											</tr>
										</thead>

										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
                                                    <td><?php echo $row['tarjeta_propiedad']; ?></td>
                                                    <td><?php echo $row['seguro']; ?></td>
                                                    <td><?php echo $row['placa']; ?></td>
													<td><?php echo $row['tecno_mecanica']; ?></td>
													<td><?php echo $row['marca']; ?></td>
													<td><?php echo $row['color']; ?></td>
                                                    <td><?php echo $row['capacidad']; ?></td>
                                                    
                                                    <td><a href='modifivehiculo.php? tarjeta_propiedad=<?php echo $row['tarjeta_propiedad'];?>'><i class='far fa-edit' style='font: size 45px;color:#44C44C '></i></td>
                                                   
                                                    <td><a href='deletevehiculo.php? tarjeta_propiedad=<?php echo $row['tarjeta_propiedad'];?>'><i class='far fa-trash-alt' style='font: size 45px;color:#FF5733 '></i></td>
                                                   
												</tr>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								</div>
								</div>
											</div>
					</main>
                    
                   <div>
                    <center><a href="registrovehiculo.php" class="btn btn-outline-success">Nuevo Registro</a></center>

                    </div>
                  
                    
					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
					
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
