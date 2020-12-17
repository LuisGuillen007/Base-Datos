<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Registro</title>
<link rel="stylesheet" type="text/css" href="EstilosBasedeDatos.css">
</head>
<body bgcolor="#778899">

	<br>
	<br>
	<br>

		<div class="form">
			<form action="Conexion.php" method="post" >

				<center>
					<br/>
					<p>Nombre</p>
					<input type="text" name="nombres" required >
					<br/>
					<br/>
					<p>Apellidos</p>
					<input type="text" name="apellidos" required >
					<br/>
					<br/>
					<p>Correo</p>
					<input type="email" name="correo" required >
					<br/>
					<br/>
					<p>Contraseña</p>
					<input type="password" name="contraseña" required >
					<br/>
					<br/>
					<br/>

					<input id="Registrarrr" type="submit" value="Registrarse" >

				</center>
			</form>
		</div>

		<br>
		<br>
		<br>	

	</body>
</html>