
<?php
	
	require "conexion.php";
	
	session_start();
	
	if($_POST){
		
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

        
		
		$sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c=($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				
				header("Location: zadmin.php");
				
			} else {
			
				echo '<script language="javascript">';
				echo 'alert("La contraseña es incorrecta");';
				echo 'window.location="inciar.php";';
				echo '</script>';
			}
			
			
			} else {
				echo '<script language="javascript">';
				echo 'alert("El usuario y la contraseña no existen");';
				echo 'location="inciar.php";';
				echo '</script>';
		}
		
		
		
	}
	
	
	
?>