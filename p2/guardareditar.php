<?php
$con = mysqli_connect("localhost","root","","bdmissael");
$id=$_GET["id"];
$zona = $_GET["zona"];
$direccion = $_GET["direccion"];
$Superficie = $_GET["superficie"];
$Distrito = $_GET["distrito"];

$sql = "update catastro set zona='$zona', direccion='$direccion', Superficie='$superficie', distrito='$Distrito' where id=$id";
mysqli_query($con, $sql);

header("Location: admin.php");
?>