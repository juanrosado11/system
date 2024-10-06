<?php
include('conexion.php');

$correo = $_POST['id'];
$sql = "SELECT  password FROM usuarios WHERE usuaario='$usuario'";
$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuario WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['pass'];

$paracorreo 		= $correo;
$titulo				= "Recuperar contraseña";
$mensaje			= $enviarpass;
$tucorreo			= "From: trmsystem.sena@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'inciar.php' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'inciar.php' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'inciar.php' </script>";
}
/*VaidrollTeam*/
?>
