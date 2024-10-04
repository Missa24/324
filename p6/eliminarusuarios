<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$id = $_GET['id'];
	$sql1 = "delete from catastro where usuario_id = '$id'";
	$sql2 = "delete from usuario where id = '$id'";
	echo "hola";
	mysqli_query($con, $sql1);
	mysqli_query($con, $sql2);
	header("Location: admin.php");

	
?>
