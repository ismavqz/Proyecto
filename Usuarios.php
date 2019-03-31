<?php
	include('conect.php');
	$link = conectarse();
	if (isset($_POST['btn'])) {


		$nombre = $_POST['txtNombre'];
		$user = $_POST['txtUsuario'];
		$pass = $_POST['txtContra'];
		$nivel = $_POST['niv'];



		$sql = "INSERT INTO usuarios(Nombre, Usuario, Password, Tipo_usuario) values('$nombre', '$user', '$pass', '$nivel')";

		$res = mysqli_query($link, $sql);
		
		if ($res) {
			
		 	echo'<script type="text/javascript">
					alert("Se registro usuario correctamente");
					window.location.href="Usuarios.php";
				</script>
				';	
		 }

	}
?>


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
			<form method="post" action="" class="reg">
				<table class="registro">
					<tr>
						<td>Tipo de Usuario: </td>
						<td>
							<select name="niv" id="" style="width: 170px;" required>
								<option value=""></option>
								<option value="Administrador">Administrador</option>
								<option value="Usuario">Usuario</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Nombre: </td><td><input type="text" name="txtNombre" placeholder="Asigna Nombre" required></td>
					</tr>
					<tr>
						<td>Usuario: </td><td><input type="text" name="txtUsuario" placeholder="Asigna Usuario" required></td>
					</tr>

					<tr>
						<td>Contraseña: </td><td><input type="password" name="txtContra" placeholder="Asigna Contraseña" required></td>
					</tr>	
				</table>
				<input type="submit" name="btn" value="ACEPTAR" class="boton">
			</form>		
		</div>
	</div>	
</body>
</html>