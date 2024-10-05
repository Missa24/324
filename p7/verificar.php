<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select id,rol_id from usuario where username = '$username' AND password = '$password'";
	$resultado = mysqli_query($con, $sql);
	if($resultado){
		$fila = mysqli_fetch_assoc($resultado);
		if($fila){
			$rol_id = $fila['rol_id'];
			$id = $fila['id'];
			if($rol_id == 1){

				header("Location: admin.php");
				exit();
			}
			elseif($rol_id == 2){
				header("Location: usuario.php?id=$id");
				exit();
			}
		}
	}
?>