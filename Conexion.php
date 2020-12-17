<!DOCTYPE html>
<html lang=“es”>
   <head>
	<title>  </title>
	<link rel="stylesheet" type="text/css" href="EstilosBasedeDatos.css">
   </head>
   <body bgcolor="#778899">
	
		<center>
			
			<?php
			include("Usuario.php");
			
				if (isset($_POST['nombres']) && !empty($_POST['nombres'])&&
					isset($_POST['apellidos']) && !empty($_POST['apellidos'])&&
					isset($_POST['correo']) && !empty($_POST['correo'])&&
					isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
				
						$con = mysqli_connect($servidor, $usuario, $contraseña)or die ("Problemas al conectar");
						mysqli_select_db($con, $basedatos) or die ("Problemas al conectar base de datos");
				
						mysqli_query($con,("INSERT INTO registro (nombres,apellidos,correo,contraseña) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[correo]','$_POST[contraseña]')"));

						echo "Datos insertados correctamente.";
				
				}else {
					echo "Error";
				}
					
			?>

			<br>

			<a id="btnRegresar" class="boton" href="Base de Datos.php"> Regresar </a>

		</center>
	
   </body>
 </html>