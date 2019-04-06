<?php

	session_start();

	include('conect.php');
	$link = conectarse();
	if (isset($_POST['btn'])) {
		
		$user = $_POST['txtUsuario'];
		$pass = $_POST['txtContra'];
		$nivel = $_POST['niv'];		

		//se hace la consulta para iniciar sesion
		$sql = "SELECT * FROM Usuarios Where Usuario = '$user' and Password = '$pass' and Tipo_usuario = '$nivel'";

		$res = mysqli_query($link, $sql);
		
		if (mysqli_num_rows($res) > 0 ) {
		 	$row = mysqli_fetch_array($res);
			$_SESSION["user"] = $row['Usuario'];
			$_SESSION["tipoUsuario"] = $row['Tipo_usuario'];

			
			if ($row['Usuario'] == $user && $row['Tipo_usuario'] == "Auxiliar") {
				
				echo'<script type="text/javascript">
					
					window.location.href="TransporteAuxiliar.php";
				</script>
				';	
			}
			
		 }
		if (mysqli_num_rows($res) == 0 && $nivel != "Auxiliar" || $nivel != "Usuario"){
			 	echo'<script type="text/javascript">
					alert("Usuario/contraseña incorrecta");
					window.location.href="Login.php";
				</script>
				';
		}		 
	}
?>