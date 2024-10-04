<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$id = $_GET['id'];
	$sql1 = "select * from catastro where usuario_id = '$id'";
	$sql2 = "select * from usuario where id = '$id'";
	$resultado2 = mysqli_query($con,$sql2);
	$resultado1 = mysqli_query($con, $sql1);
	if ($resultado2) {
	    $fila2 = mysqli_fetch_assoc($resultado2);    
	    if ($fila2) {
	        $username = $fila2['username'];
	        $nombre = $fila2['nombre'];
	        $paterno = $fila2['paterno'];
	        $materno = $fila2['materno'];
	        $ci = $fila2['ci'];
	        $rol_id = $fila2['rol_id'];
	    }
	}
	$count = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuario</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1 class="display-4">Bienvenido
		<?php
		echo $nombre," ", $paterno
		?>
	</h1>
	<h3 class="display-6">Informacion de Catastro</h3>
	<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">ID</td>
			<td scope="col">ZONA</td>
			<td scope="col">DIRECCION</td>
			<td scope="col">SUPERFICIE</td>
			<td scope="col">DISTRITO</td>
			<td scope="col">FECHA_REGISTRO</td>
			<td scope="col">CODIGO CATASTRAL</td>

		</tr>
	</thead>	
	<tbody>
		<?php
				while($fila1 = mysqli_fetch_array($resultado1)){

				echo "<tr>";
				echo "<td>$fila1[id]</td>";
				echo "<td>$fila1[zona]</td>";
				echo "<td>$fila1[direccion]</td>";
				echo "<td>$fila1[superficie]</td>";
				echo "<td>$fila1[distrito]</td>";
				echo "<td>$fila1[fecha_registro]</td>";
				echo "<td>$fila1[codigo_catastral]</td>";			
				echo "</tr>";

			}
		?>
		</tbody>
	</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>