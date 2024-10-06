<?php
include("conexion.php");

session_start();

$tarjeta_propiedad = $_POST['tarjeta_propiedad'];
$seguro = $_POST['seguro'];
$placa = $_POST['placa'];
$tecno_mecanica= $_POST['tecno_mecanica'];
$marca = $_POST['marca'];
$color= $_POST['color'];
$capacidad = $_POST['capacidad'];




$sql = "INSERT INTO vehiculo (tarjeta_propiedad, seguro, placa, tecno_mecanica, marca, color ,capacidad) VALUES('$tarjeta_propiedad', '$seguro', '$placa','$tecno_mecanica', '$marca',  '$color', '$capacidad')";
          if(mysqli_query($mysqli, $sql)){
          echo '<script language="javascript">';
	        echo 'alert("Nuevo vehiculo agregado");';
	        echo 'window.location="vehiculo.php";';
	        echo '</script>';
			                    }
	
          else {
	        echo '<script language="javascript">';
	        echo 'alert("error vehiculo no agregado!");';
	        echo 'window.location="tables.php";';
	        echo '</script>';
            }

            
 

?>

