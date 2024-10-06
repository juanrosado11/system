<?php
include("conexion.php");

session_start();

$dni = $_POST['dni'];
$cedula = $_POST['cedula'];
$names = $_POST['nombres'];
$apel= $_POST['apellidos'];
$telefono = $_POST['telefono'];
$ruta= $_POST['ruta_asignada'];
$licencia = $_POST['licencia'];




$sql = "INSERT INTO conductores (id, cedula, nombres, apellidos,  telefono, ruta_asignada ,licencia) VALUES('$dni', '$cedula', '$names', '$apel',  '$telefono', '$ruta', '$licencia')";
          if(mysqli_query($mysqli, $sql)){
          echo '<script language="javascript">';
	        echo 'alert("Nuevo usuario agregado");';
	        echo 'window.location="tablacondu.php";';
	        echo '</script>';
			                    }
	
          else {
	        echo '<script language="javascript">';
	        echo 'alert("error usuario no agregado!");';
	        echo 'window.location="tables.php";';
	        echo '</script>';
            }

            
 

?>

