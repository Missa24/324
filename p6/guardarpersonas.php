<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$username = $_GET['username'];
	$password = $_GET['password'];
	$nombre = $_GET['nombre'];
	$paterno = $_GET['paterno'];
	$materno = $_GET['materno'];
	$ci = $_GET['ci'];
	$rol_id = $_GET['rol_id'];
	$sql = "INSERT INTO usuario (username, password, nombre, paterno, materno, ci, rol_id) VALUES ('$username', '$password', '$nombre', '$paterno', '$materno', '$ci','$rol_id')";
	mysqli_query($con, $sql);
	header("Location: admin.php");
?>

