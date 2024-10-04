<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$id=$_GET["id"];
	$sql="select * from usuario where id=$id";
	$resultado=mysqli_query($con, $sql);
	$fila = mysqli_fetch_array($resultado);
	$id=$fila["id"];
	$nombre=$fila["nombre"];
	$paterno=$fila["paterno"];
	$materno=$fila["materno"];
	$ci=$fila["ci"];

	$sql2 = "select * from catastro where usuario_id =$id";
	$res2 = mysqli_query($con, $sql2);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Propiedades</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Propiedades de:
	 <?php 
		echo $nombre," ",$paterno;
	 ?>
	 	
	 </h1>
	 	<table class="table table-striped">
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
			<td scope="col">OPCIONES</td>

		</tr>
	</thead>	
	<tbody>
		<?php
				while($fila1 = mysqli_fetch_array($res2)){

				echo "<tr>";
				echo "<td>$fila1[id]</td>";
				echo "<td>$fila1[zona]</td>";
				echo "<td>$fila1[direccion]</td>";
				echo "<td>$fila1[superficie]</td>";
				echo "<td>$fila1[distrito]</td>";
				echo "<td>$fila1[fecha_registro]</td>";
				echo "<td>$fila1[codigo_catastral]</td>";
				echo "<td>";
				echo "<a class='btn btn-danger' href='modificar.php?id=$fila1[id]&fecha_registro=$fila1[fecha_registro]&codigo_catastral=$fila1[codigo_catastral]'>Editar</a>";

				echo "<a class='btn btn-danger' href='eliminar.php?id=$fila1[id]'>Eliminar</a>";
				echo "</td>";
				echo "</tr>";

			}
		?>
		</tbody>
	
	</table>
	<?php
	echo "<a class='btn btn-danger' href='agregar.php?id=$id'>Agregar</a>";
	?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

