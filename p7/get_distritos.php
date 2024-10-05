<?php
$con = mysqli_connect("localhost", "root", "", "bdmissael");

$sql = "SELECT * FROM distrito";
$result = mysqli_query($con, $sql);

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
}

echo $options;
?>
