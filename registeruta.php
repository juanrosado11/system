<?php
include("conexion.php");

session_start();

$dni = $_POST['id'];
$names = $_POST['nombre_ruta'];
$noapren= $_POST['n°Aprendices'];
$horar= $_POST['jornada'];
$date= $_POST['fecha'];
$horal= $_POST['hora_llegada'];
$horas = $_POST['hora_salida'];
$namesc = $_POST['nombre_condu'];
$ubic = $_POST['ubicacion'];
$plase = $_POST['placa'];






            $sql = "INSERT INTO rutas (id, nombre_ruta, n°aprendices, horario, fecha ,hora_llegada , hora_salida, nombre_condu, ubicacion, placa) 
			VALUES('$dni', '$names', '$noapren', '$horar', '$date', '$horal', '$horas','$namesc ', '$ubic', '$plase')";





            if(mysqli_query($mysqli, $sql)){
            echo '<script language="javascript">';
	        echo 'alert("Nuevo usuario agregado");';
	        echo 'window.location="tablarutas.php";';
	        echo '</script>';
			}
	
            else {
	        echo '<script language="javascript">';
	        echo 'alert("Usuario duplicado!");';
	        echo 'window.location="tablrutas.php";';
	        echo '</script>';
            }

            

 

?>

