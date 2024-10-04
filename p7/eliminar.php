<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$id = $_GET['id'];

	$sql = "delete from catastro where id = '$id'";
	mysqli_query($con,$sql);
	header("Location: admin.php");


?>