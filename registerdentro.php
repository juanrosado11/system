<?php
include("conexion.php");

session_start();

$dni = $_POST['id'];
$cedula = $_POST['cedula'];
$names = $_POST['nombre'];
$meil = $_POST['correo'];
$tipou = $_POST['tipo_usuario'];
$user= $_POST['usuario'];
$password = $_POST['password'];


$pass_c = ($password);
$sql = "INSERT INTO usuarios (id, cedula, nombre, correo,  tipo_usuario, usuario ,password) VALUES('$dni', '$cedula', '$names', '$meil',  '$tipou', '$user', '$pass_c')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="zadmin.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="inciar.php";';
	echo '</script>';
}
?>