<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="/peticion" method="POST">
		{{ csrf_field() }}
		<input name="nombre" type="text" placeholder="nombre">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>