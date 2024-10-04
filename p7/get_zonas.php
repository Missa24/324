<?php
$con = mysqli_connect("localhost", "root", "", "bdmissael");

$distrito_id = $_POST['distrito_id'];

$sql = "SELECT * FROM zona WHERE distrito_id = '$distrito_id'";
$result = mysqli_query($con, $sql);

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
}

echo $options;
?>
