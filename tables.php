<?php
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$id = $_SESSION['id'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	if($tipo_usuario == 1){
		$where = "";
		} else if($tipo_usuario == 2){
		$where = "WHERE id= $id";
	}
	
	$sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql);


    $nombre = $_SESSION['nombre'];
	
	
?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USUARIOS </title>
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
        <a class="navbar-brand ps-3" href="tables.php">Panel de Control</a>
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
                            
                            <?php if($tipo_usuario == 1) { ?>
                            <div class="sb-sidenav-menu-heading">Interfaz</div>
                            
                            <a class="nav-link" href="tables.php">
                            
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Usuarios
                              </a>
                             
                              <a class="nav-link" href="tabla_aprendices.php">
                         
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Aprendices 
                             
                              </a>
                              
                              <a class="nav-link" href="tablacondu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Conductor 
                              </a>

                              <a class="nav-link" href="vehiculo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Vehiculo
                              </a> 

                              <a class="nav-link" href="tablarutas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Rutas
                              </a>
                              
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
					   <div class="container-fluid">
						<h1 class="mt-4">Usuarios</h1>
						
						<div class="card mb-4">
							<div class="card-body">En este apartado podras Registrar,consultar,eliminar y actualizar los datos de los usuarios de la Plataforma. </a>.</div>
						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i> Usuarios</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
                                                <th>Codigo</th>
                                                <th>Cedula</th>
												<th>Usuario</th>
												<th>Password</th>
												<th>Nombre</th>
												<th>Tipo Usuario</th>
                                                <th>Correo</th>
                                                <th>Actualizar</th>
                                                <?php if($tipo_usuario == 1) { ?>
                                                <th>Eliminar </th>
                                                <?php } ?>
											</tr>
										</thead>

										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
                                                    
													<td><?php echo $row['id']; ?></td>
													<td><?php echo $row['cedula']; ?></td>
                                                    <td><?php echo $row['usuario']; ?></td>
													<td><?php echo $row['password']; ?></td>
													<td><?php echo $row['nombre']; ?></td>
													<td><?php echo $row['tipo_usuario']; ?></td>
                                                    <td><?php echo $row['correo']; ?></td>
                                                    <td><a href='modificaruser.php?id=<?php echo $row['id'];?>'><i class='far fa-edit' style='font: size 45px;color:#44C44C '></i></td>
                                                    <?php if($tipo_usuario == 1) { ?>
                                                    <td><a href='deleteuser.php?id=<?php echo $row['id'];?>'><i class='far fa-trash-alt' style='font: size 45px;color:#FF5733 '></i></td>
                                                    <?php } ?>
												</tr>

											<?php } ?>


                                            
										</tbody>
									</table>
								</div>

                                
								</div>
								</div>
											</div>
					</main>
                    <?php if($tipo_usuario == 1) { ?>
                    <div >
				<center><a href="guardaruser.php" class="btn btn-outline-success">Nuevo Registro</a></center>
                </div>
				<?php } ?>
                <?php if($tipo_usuario == 2) { ?>
				<div >
				<center><a href="zadmin.php" class="btn btn-outline-success">Regresar</a></center>
                </div>
                
                
                <?php } ?>
			   
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



