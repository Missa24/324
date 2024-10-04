<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Personas</title>

</html><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Agregar Personas</h1>
	<form action="guardarpersonas.php" method="GET">
		<div class="mb-3">
	    	<label class="form-label" for="username">username</label>
	    	<input type="text" name="username" id="username" required>
	    </div>	
		<div class="mb-3">
	    	<label class="form-label" for="password">password</label>
	    	<input type="password" name="password" id="password" required>
		</div>
		<div class="mb-3">	
	    	<label class="form-label"for="nombre">nombre</label>
	    	<input type="text" name="nombre" id="nombre" required>
	    </div>
	    <div class="mb-3">
	    	<label class="form-label" for="paterno">paterno</label>
	    	<input type="text" name="paterno" id="paterno" required>
	    	</div>
	    <div class="mb-3">
	    	<label  class="form-label"for="materno">materno</label>
	    	<input type="text" name="materno" id="materno" required>
		</div>
	    <div class="mb-3">
	    	<label  class="form-label"for="ci">ci</label>
	    	<input type="text" name="ci" id="ci" required>

	    	<input id="rol_id"type="hidden" name="rol_id" value="2">
		</div>
	    <button class="btn btn-primary" type="submit">Guardar Edición</button>

	</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
