<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$idus = $_GET['id'];
	$zona = $_GET['zona'];
	$direccion = $_GET['direccion'];
	$superficie = $_GET['superficie'];
	$distrito = $_GET['distrito'];
	$codigo_catastral = $_GET['codigo_catastral'];
	$fecha_registro = $_GET['fecha_registro'];

	$sql = "INSERT INTO catastro (usuario_id, zona, direccion, superficie, distrito, fecha_registro, codigo_catastral) VALUES ('$idus', '$zona', '$direccion', '$superficie', '$distrito', '$fecha_registro','$codigo_catastral')";
	mysqli_query($con, $sql);
	header("Location: admin.php");
?>