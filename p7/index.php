<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<main>
		<h1>Iniciar Sesion</h1>
		<form action="verificar.php" method="POST">
			<div class="mb-3">
				<label for="username"class="form-label">Usuario</label>
				<input class="form-control" type="Text" name="username" id="username">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Contraseña</label>
				<input  class="form-control" type="Password" name="password" id="password">
			</div>
			<button class="btn btn-primary" type="submit">Iniciar Sesion</button>
		</form>
	</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>