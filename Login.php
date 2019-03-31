<?php
	include('conect.php');
	$link = conectarse();
	if (isset($_POST['btn'])) {
		
		$user = $_POST['txtUsuario'];
		$pass = $_POST['txtContra'];
		$nivel = $_POST['niv'];

		//se hace la consulta para iniciar sesion
		$sql = "SELECT * FROM Usuarios Where Usuario = '$user' and Password = '$pass' and Tipo_usuario = '$nivel'";

		$res = mysqli_query($link, $sql);
		
		if (mysqli_num_rows($res) > 0 && $nivel == "Administrador") {
		 	$row = mysqli_fetch_array($res);
			$_SESSION["user"] = $row['Usuario'];

			echo'<script type="text/javascript">
					
					window.location.href="Transporte.php";
				</script>
				';
		 }
		 if (mysqli_num_rows($res) == 0 && $nivel != "Administrador"){
		 	echo'<script type="text/javascript">
					alert("Usuario/contraseña incorrecta");
					window.location.href="Login.php";
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
			<form method="post" action="" class="lgn">
				<table class="login">
					<tr>
						<td>Tipo de Usuario: </td>
						<td>
							<select name="niv" id="" style="width: 170px;">
								<option value=""></option>
								<option value="Administrador">Administrador</option>
								<option value="Usuario">Usuario</option>
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