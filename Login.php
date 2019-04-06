

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script src="js/jquery-3.1.0.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/script.js"></script>
	

</head>
<body>

	<header>
		<div class="contenedor">
		
			<div id="marca">
				<h1><p>gob.mx</p></h1>	
			</div>
			
		
			<nav>
				<ul class="na">
					<li class="actual"><a href="Index.php">Inicio</a></li>
					<li ><a href="#">Servicios</a>
						<ul class="serv">
							<li><a href="#">Servicios de Transporte</a></li>
						</ul>
					</li>
					<li ><a href="Login.php">Iniciar Sesion</a></li>
					<li ><a href="Usuarios.php">Registrarse</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="separar">
		
	</section>

	<section id="cabecera">
		<div class ="">
			<img src="img/logo-ipn.png">
		</div>
		<br>
			<p><span class="resaltado"> Instituto Politécnico Nacional</span><br>
			"La Técnica al Servicio de la Patria".</p>
	</section>






	<div class="modal">
		<div class="bodyModal">
			<form method="post" action="Sesiones.php" class="lgn">
				<table class="login">
					<tr>
						<td>Tipo de Usuario: </td>
						<td>
							<select name="niv" id="" style="width: 170px;">
								<option value=""></option>
								<option value="Usuario">Usuario</option>
								<option value="Auxiliar">Auxiliar</option>
								<option value="Responsable">Responsable</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Usuario: </td><td><input type="text" name="txtUsuario" placeholder="Asigna Usuario"></td>
					</tr>

					<tr>
						<td>Contraseña: </td><td><input type="password" name="txtContra" placeholder="Asigna Contraseña"></td>
					</tr>	
				</table>
				<input type="submit" name="btn" value="ACEPTAR" class="boton">
			</form>		
		</div>
	</div>	
</body>
</html>

