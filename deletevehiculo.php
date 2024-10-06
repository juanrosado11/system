<?php
include("conexion.php");

$tarjeta_propiedad = $_GET['tarjeta_propiedad'];
	
	$sql = "DELETE FROM vehiculo WHERE tarjeta_propiedad = '$tarjeta_propiedad'";
	$resultado = $mysqli->query($sql);

if($resultado){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="vehiculo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="zadmin.php";';
	echo '</script>';
}
?>