<?php
include("conexion.php");

session_start();

$dni = $_POST['id'];
$cedula = $_POST['cedula'];
$names = $_POST['nombres'];
$apel= $_POST['apellidos'];
$meil = $_POST['correo'];
$etapa= $_POST['etapa'];
$ficha = $_POST['ficha'];
$rut = $_POST['ruta'];




            $sql = "INSERT INTO aprendices (id, nombres, apellidos, correo, etapa ,ficha , ruta, cedula) 
             VALUES('$dni', '$names', '$apel', '$meil', '$etapa', '$ficha', '$rut','$cedula')";





            if(mysqli_query($mysqli, $sql)){
            echo '<script language="javascript">';
	        echo 'alert("Nuevo usuario agregado");';
	        echo 'window.location="tabla_aprendices.php";';
	        echo '</script>';
			}
	
            else {
	        echo '<script language="javascript">';
	        echo 'alert("Usuario duplicado!");';
	        echo 'window.location="foregister.php";';
	        echo '</script>';
            }

            

 

?>

