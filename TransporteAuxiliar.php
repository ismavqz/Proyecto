<?php
	session_start();
	include('conect.php');
	$link = conectarse();
	$nom = "";
	$folio = "";
	$area = "";
	if (isset($_SESSION["Tipo_usuario"]) == "Auxiliar") {
		if (!empty(isset($_SESSION['Nombre']))) {
			$nom = $_SESSION['Nombre'];		
		}
		if (!empty(isset($_SESSION['Folio']))) {
			$folio= $_SESSION['Folio'];		
		}	

		if (!empty(isset($_SESSION['Area']))) {
			$area= $_SESSION['Area'];		
		}	
	}
?>





<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	
		<script type="text/javascript" src="jquery/jquery-3.3.1.min"></script><!--
		
	<script type="text/javascript" src="jquery/EnviarDatos.js"></script> -->
	
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
							<li><a href="TransporteResponsable.php">Servicios de Transporte</a></li>
							
						</ul>
					</li>
					<li ><a href="#" >Iniciar Sesión</a></li>
					<li ><a href="Cerrar_Sesion.php">Cerrar Sesion</a></li>
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
						<td >NOMBRE: </td><td ><input type="text" id="nombre" name="nombre" placeholder="Nombre de Solicitante"  onkeypress="return soloLetras(event)" value="<?php echo $nom ?>" ></td>
						<td >FOLIO: </td><td ><input type="text" id="Folio" name="Folio" placeholder="Folio" onkeypress="return soloNumeros(event)" value="<?php echo $folio ?>"></td>
					</tr>
					<tr>
						<td >DEPTO O ÁREA DE ADSCRIPCIÓN: </td>
						<td><input type="text" class="anch" id="txtAreaAds" name="txtAreaAds" placeholder="Depto a Area de Ads" onkeypress="return soloLetras(event)" value="<?php echo $area ?>" ></td>
						
						<td>FECHA DE SOLICITUD: </td>
						<td><input type="date" id="Fecha" name="FechaSoli" min="DD/MM/AAAA" ></td>
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

					<tr>
						<td colspan="2" class="Centro"> VIAJE DE IDA</td>
						<td colspan="2" class="Centro"> VIAJE DE REGRESO</td>
					</tr>
					<tr>
						<td class="Centrar">ORIGEN</td><td class="Centrar">DESTINO</td><td class="Centrar">ORIGEN</td><td class="Centrar">DESTINO</td>
					</tr>

					<tr>
						<td ><textarea rows="3"  name="OrigenIda" ></textarea></td>
						<td ><textarea rows="3"  name="DestinoIda" ></textarea></td>
						<td ><textarea rows="3"  name="OrigenReg" ></textarea></td>
						<td ><textarea rows="3"  name="DestinoReg" ></textarea></td>	
					</tr>

					<tr>
						<td >FECHA DE SALIDA: </td><td><input type="date" class="anch" name="FechaSalida" ></td>
						<td >FECHA LLEGADA: </td><td ><input type="date" class="anch" name="FechaRegreso"></td>
					</tr>

					<tr>
						<td >SALIDA: </td>
						<td class="Izq"> Mañana <input type="checkBox" class="check" name="SalidaMad" value="Manana"> Tarde <input type="checkBox" class="check" name="SalidaTarde" value="Tarde"></td>

						<td >REGRESO: </td>
						<td class="Izq"> Mañana <input type="checkBox" class="check" name="RegresoMad" value="Manana"> Tarde <input type="checkBox" class="check" name="RegresoTarde" value="Tarde"></td>
					</tr>

					<tr>
						<td >NÚMERO DE PASAJEROS: </td><td><input type="text" class="anch" name="NumPasajIda" onkeypress="return soloNumeros(event)" ></td>
						<td >NÚMERO DE PASAJEROS: </td><td><input type="text" class="anch" name="NumPasajReg" onkeypress="return soloNumeros(event)" ></td>
					</tr>
					
					<tr>
						<td colspan="2" class="Centro">OBSERVACIONES</td>
						<td colspan="2" class="Centro">OBSERVACIONES</td>
					</tr>

					<tr>
						<td colspan="2"><textarea rows="3" name="ObsSalida" placeholder="Observación de viaje salida"></textarea></td>

						<td colspan="2"><textarea rows="3" name="ObsReg" placeholder="Observación de viaje Regreso"></textarea></td>
					</tr>

					<tr>
						<th colspan = "4" >DESCRIPCIÓN DEL VIAJE</th>
					</tr>
					<tr>
						<td colspan="4"><textarea rows="4" class="TareaDesc" name="DescripViaje"></textarea></td>
					</tr>

					<tr>
						<th colspan = "4" >CONTROL DE FLOTA VEHICULAR <br>(Esta sección se llena por el encargado de transportes)
						</th>
					</tr>

					<tr>
						<td > VEHICULO ASIGNADO: </td>
							<td>
								<select name="VehiculoAsig">
									<option value=""></option>
									<option value="NISSAN TIIDA ARENA"> NISSAN TIIDA ARENA </option>
									<option value="NISSAN TIIDA BLANCO"> NISSAN TIIDA BLANCO </option>
									<option value="NP300 ROJA"> NP300 ROJA </option>
									<option value="NP300 GRIS"> NP300 GRIS </option>
									<option value="NV300 BLANCA PASAJEROS"> NV300 BLANCA PASAJEROS </option>
									<option value="CHEVY 4 PUERTAS"> CHEVY 4 PUERTAS </option>
									<option value="CHEVY 2 PUERTAS"> CHEVY 2 PUERTAS </option>
									<option value="EXPRESS"> EXPRESS </option>
									<option value="CHEVROLET"> CHEVROLET </option>
								</select>
							</td>

						<td >PLACAS: </td>
							<td>
								<select name="Placas">
									<option value=""></option>
									<option value="T57-AFB"> T57-AFB </option>
									<option value="U66-AFB"> U66-AFB </option>
									<option value="H92-AFD"> H92-AFD </option>
									<option value="H06-AFD"> H06-AFD </option>
									<option value="C28-AER"> C28-AER </option>
									<option value="PXR2875"> PXR2875 </option>
									<option value="PXR2750"> PXR2750 </option>
									<option value="PXR2831"> PXR2831 </option>
									<option value="504WEM"> 504WEM </option>


								</select>
							</td>
					</tr>
					
					<tr>
						<td class="txt">NOMBRE DEL OPERADOR: </td>
							<td colspan="3">
								<select name="Operador">
									<option value=""></option>
									<option value="BERNARDO GONZALEZ GOMEZ">Bernardo González Gómez</option>
									<option value="BALTAZAR TRINIDAD RODRIGUEZ SANCHEZ">Baltazar Trinidad Rodríguez Sánchez</option>
									<option value="FRANCISCO FLORES GARCIA">Francisco Flores García</option>
								</select>
							</td>
					</tr>

					<tr>
						<td colspan="2" class="Centro">SALIDA</td>
						<td colspan="2" class="Centro">ENTRADA</td>
					</tr>
					<tr>
						<td class="Centrar">KILOMETROS</td>
						<td class="Centrar">COMBUSTIBLE</td>
						<td class="Centrar">KILOMETROS</td>
						<td class="Centrar">COMBUSTIBLE</td>
					</tr>

					<tr>	
						<td><textarea rows="3"  name="KmIda" ></textarea></td>
						
						<td><textarea rows="3"  name="CombusIda" ></textarea></td>
						
						<td><textarea rows="3"  name="Kmregreso" ></textarea></td>

						<td><textarea rows="3"  name="CombusReg" ></textarea></td>	
					</tr>

					<tr>
						<td >HORA DE SALIDA: </td><td><input type="time"  name="HrSalida" ></td>
						<td >HORA DE REGRESO: </td><td><input type="time" name="HrRegreso" ></td>
					</tr>

					<tr>
						<td colspan="2" class="Centro">OBSERVACIONES</td>
						<td colspan="2" class="Centro">OBSERVACIONES</td>
					</tr>

					<tr>
						<td colspan="2"><textarea rows="3"  name="ObsSalida" placeholder="Observación Vehicular Salida"></textarea></td>
						<td colspan="2"><textarea rows="3"  name="ObsRegreso" placeholder="Observación Vehicular Entrada"></textarea></td>
					</tr>
	
					<tr>

						<td>
							<input type="text" name="Solicitante" class="firma1" onkeypress="return soloLetras(event)" >
						</td>
						<td colspan="2" >
							<input type="text" name="JefeResp" class="firma1" onkeypress="return soloLetras(event)" >
						</td>
						<td>
							<input type="text" name="DepAdministrativo" class="firma1" onkeypress="return soloLetras(event)" >
						</td>
					</tr>

					<tr>
						<td class="Centro"> SOLICITANTE</td>
						<td colspan="2" class="Centro">Vo. Bo.<br>JEFE DE DEPTO O RESPONSABLE</td>
						<td class="Centro">AUTORIZACIÓN<br>DEPTO GESTIÓN ANMINISTRATIVA</td>
					</tr>
					


				
				<td><input type="submit" id="Botton" name="comprobar" value="COMPROBAR DATOS A ADMINISTRADOR" ></td>
				<td><input type="submit" id="Botton" name="enviar" value="ENVIAR DATOS A LA BD"></td>
				<td><input type="submit" id="Act" name="actualizar" value="CANCELAR"></td>
				<td></td>
				</table>
	</form>
</body>
</html>