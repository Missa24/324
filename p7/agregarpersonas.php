<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Personas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Agregar Personas</h1>
	<form action="guardarpersonas.php" method="GET">
		<div class="mb-3">
	    	<label class="form-label" for="username">Username</label>
	    	<input type="text" name="username" id="username" required>
	    </div>	
		<div class="mb-3">
	    	<label class="form-label" for="password">Password</label>
	    	<input type="password" name="password" id="password" required>
		</div>
		<div class="mb-3">	
	    	<label class="form-label" for="nombre">Nombre</label>
	    	<input type="text" name="nombre" id="nombre" required>
	    </div>
	    <div class="mb-3">
	    	<label class="form-label" for="paterno">Paterno</label>
	    	<input type="text" name="paterno" id="paterno" required>
	    </div>
	    <div class="mb-3">
	    	<label class="form-label" for="materno">Materno</label>
	    	<input type="text" name="materno" id="materno" required>
		</div>
	    <div class="mb-3">
	    	<label class="form-label" for="ci">C.I.</label>
	    	<input type="text" name="ci" id="ci" required>

	    	<input id="rol_id" type="hidden" name="rol_id" value="2">
		</div>

		<div class="mb-3">
			<label class="form-label" for="distrito">Distrito</label>
			<select id="distrito" name="distrito_id" required>
				<option value="">Seleccione Distrito</option>
			</select>
		</div>

		<div class="mb-3">
			<label class="form-label" for="zona">Zona</label>
			<select id="zona" name="zona_id" required>
				<option value="">Seleccione Zona</option>
			</select>
		</div>

		<button class="btn btn-primary" type="submit">Guardar Edición</button>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
		
			$.ajax({
				url: 'get_distritos.php',
				method: 'GET',
				success: function(data) {
					$('#distrito').append(data);
				}
			});

			$('#distrito').change(function() {
				var distrito_id = $(this).val();
				if (distrito_id) {
					$.ajax({
						url: 'get_zonas.php',
						method: 'POST',
						data: {distrito_id: distrito_id},
						success: function(data) {
							$('#zona').html(data); 
						}
					});
				} else {
					$('#zona').html('<option value="">Seleccione Zona</option>'); 
				}
			});
		});
	</script>
</body>
</html>
