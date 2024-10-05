<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$username = $_GET['username'];
	$password = $_GET['password'];
	$nombre = $_GET['nombre'];
	$paterno = $_GET['paterno'];
	$materno = $_GET['materno'];
	$ci = $_GET['ci'];
	$rol_id = $_GET['rol_id'];
	$distrito_id = $_GET['distrito_id'];
	$zona_id = $_GET['zona_id'];
	echo "hola",$distrito," ",$zona;
	$sql = "INSERT INTO usuario (username, password, nombre, paterno, materno, ci, rol_id) VALUES ('$username', '$password', '$nombre', '$paterno', '$materno', '$ci','$rol_id')";
	mysqli_query($con, $sql);

	$query_distrito = "SELECT nombre FROM distrito WHERE id = '$distrito_id'";
	$result_distrito = mysqli_query($con, $query_distrito);
	$distrito = mysqli_fetch_assoc($result_distrito)['nombre'];

	$query_zona = "SELECT nombre FROM zona WHERE id = '$zona_id'";
	$result_zona = mysqli_query($con, $query_zona);
	$zona = mysqli_fetch_assoc($result_zona)['nombre'];


	$last_id = mysqli_insert_id($con);
	header("Location: guardarPP.php?id=$last_id&distrito=$distrito&zona=$zona");
	exit();
?>

