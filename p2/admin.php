<?php
	$con = mysqli_connect("localhost","root","","bdmissael");
	$sql = "select * from usuario where rol_id = 2";

	$res = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1 class="display-4">Bienvenido administrador
	</h1>
	<h3 class="display-6">Usuarios Registrados</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<td scope="col">NOMBRE</td>
				<td scope="col">PATERNO</td>
				<td scope="col">MATERNO</td>
				<td scope="col">CI</td>
				<td scope="col">OPCIONES</td>


			</tr>
		</thead>	
		<tbody>
			<?php
					while($fila1 = mysqli_fetch_array($res)){

					echo "<tr>";
					echo "<td>$fila1[nombre]</td>";
					echo "<td>$fila1[paterno]</td>";
					echo "<td>$fila1[materno]</td>";
					echo "<td>$fila1[ci]</td>";
					echo "<td>";
					echo "<a class='btn btn-danger' href='verpropiedades.php?id=$fila1[id]'>Ver Propiedades</a>";
					echo "<a class='btn btn-danger' href='borrar.php?id=$fila1[id]'>Eliminar</a>";
					echo "</td>";
					echo "</tr>";

				}
			?>
		</tbody>
	</table>
	<a class='btn btn-danger'href="agregarpersonas.php">Agregar Personas</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>