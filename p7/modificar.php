<?php
	$con = mysqli_connect("localhost","root","","bdmissael");


	$id=$_GET["id"];
	$fecha=$_GET["fecha_registro"];
	$codigo_catastral=$_GET["codigo_catastral"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Propiedad</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Editar Informacion</h1>
	<form action="guardareditar.php" method="GET">
		<div class="mb-3">
			<label class="form-label" for="id">id</label>
	    	<input value="<?php echo $id;?>"type="text" name="id" id="id" readonly>
		</div>	
		<div class="mb-3">
	    	<label class="form-label" for="zona">Zona</label>
	    	<input type="text" name="zona" id="zona" required>
	    </div>	
		<div class="mb-3">
	    	<label class="form-label" for="direccion">Dirección</label>
	    	<input type="text" name="direccion" id="direccion" required>
		</div>
		<div class="mb-3">	
	    	<label class="form-label"for="superficie">Superficie</label>
	    	<input type="number" name="superficie" id="superficie" required>
	    </div>
	    <div class="mb-3">
	    	<label class="form-label" for="distrito">Distrito</label>
	    	<input type="text" name="distrito" id="distrito" required>
	    	</div>
	    </div>
	    <div class="mb-3">
	    	<label  class="form-label"for="codigo_catastral">codigo_catastral</label>
	    	<input value="<?php echo $codigo_catastral ?>"type="text" name="codigo_catastral" id="codigo_catastral" readonly>
		</div>
	    <div class="mb-3">
	    	<label  class="form-label"for="fecha_registro">Fecha Registro</label>
	    	<input value="<?php echo $fecha ?>"type="date" name="fecha_registro" id="fecha_registro" readonly>
		</div>
	    <button class="btn btn-primary" type="submit">Guardar Edición</button>

	</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>



