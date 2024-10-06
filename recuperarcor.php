<?php

$conexion = mysqli_connect("localhost", "root", "", "sistemat") or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select * from usuarios where correo='$_REQUEST[correo]'") or
die("Problemas en el select:" . mysqli_error($conexion));

$x=0;

while ($reg = mysqli_fetch_array($registros)) {

$x=1;
   
$para      = $reg['correo'];
$asunto    = 'RECUPERAR CONTRASEÑA';
$descripcion   =  "GRACIAS POR CONTACTARNOS SEÑOR(A):"." ".$reg['nombre']."  "."NOMBRE DE USUARIO:" ." ". $reg['usuario']."  "."CONTRASEÑA:"." ". $reg['password'];
$de = 'From: trmsystem.sena@gmail.com';

if (mail($para, $asunto, $descripcion, $de))
   {
header("Location:inciar.php?correo=1");
}
} 
if($x==0){
header("Location:inciar.php?error=1");
}
mysqli_close($conexion);
?>
