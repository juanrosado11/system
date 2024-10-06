<?php
include("conexion.php");

$id = $_GET['id'];
	
	$sql = "DELETE FROM conductores WHERE id = '$id'";
	$resultado = $mysqli->query($sql);

if($resultado){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="tablacondu.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="zadmin.php";';
	echo '</script>';
}
?>