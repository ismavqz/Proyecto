
<?php

	$nombre = "";
	$folio = "";
	$area = "";
	$fecha = "";

	//se reciben los datos de query "EnviarDatos.js"
	if (isset($_POST['Nom'])) {
		$nombre = $_POST['Nom'];
	}
	if (isset($_POST['Folio'])) {
		$folio = $_POST['Folio'];
	}
	if (isset($_POST['Area'])) {
		$area = $_POST['Area'];
	}
	if (isset($_POST['Fecha'])) {
		$fecha = $_POST['Fecha'];
	}
?>








<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	
		<script type="text/javascript" src="jquery/jquery-3.3.1.min"></script>
	<script type="text/javascript" src="jquery/EnviarDatos.js"></script>
	
	<script type="text/javascript" src="jquery/validacion.js"></script>
	
	<link rel="stylesheet" href="css/EstiloTransporte.css">
	<link rel="stylesheet" href="css/estilos.css">
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
							<li><a href="#">Servicios Generales</a></li>
						</ul>
					</li>
					<li ><a href="#" >Iniciar Sesión</a></li>
					<li ><a href="#">Contacto</a></li>
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


	<form method="post" id="frm">
		<table class="table1">
					<tr>
						<th colspan="4" class="DS">DATOS DEL SOLICITANTE</th>
					</tr>
					
					<tr>
						<td >NOMBRE: </td><td ><input type="text" id="nombre" name="nombre" placeholder="Nombre de Solicitante" value="<?php echo $nombre ?>" readonly></td>
						<td >FOLIO: </td><td ><input type="text" id="Folio" name="Folio" placeholder="Folio" value="<?php echo $folio ?>" readonly></td>
					</tr>
					<tr>
						<td >DEPTO O ÁREA DE ADSCRIPCIÓN: </td><td ><input type="text" class="anch" id="txtAreaAds" name="txtAreaAds" placeholder="Depto a Area de Ads" value="<?php echo $area ?>" readonly></td>
						<td >FECHA DE SOLICITUD: </td><td><input type="text" id="Fecha" name="FechaSoli" value="<?php echo $fecha ?>" readonly></td>
					</tr>

					<tr>
						<th colspan="4">DATOS DEL SERVICIO DE TRANSPORTE</th>
					</tr>
					<tr>
						<td colspan="4" class="Centro">ACTIVIDADES</td>
					</tr>
					<tr>
						<td >ACADÉMICAS o ADMINISTRATIVAS<br>(combustible, peaje y alimentos de chofer<br> serán cubiertos por el usuario)</td><td ><input type="checkBox" name="Academicas" value="Academicas o Administrativas"></td>
						<td >INVESTIGACIÓN o CAMPO: </td><td ><input type="checkBox" name="Investig" value="Investigacion o Campo"></td>
					</tr>
					</tr>
				
				<td><input type="submit" id="Botton" name="btn" value="ENVIAR" ></td>
				<td></td>
				<td><input type="submit" id="Act" name="actualizar" value="ACTUALIZAR" ></td>
				<td></td>
				
				</table>
	</form>
	<div id="datos">
		
	</div>
</body>
</html>









