<?php
	function conectarse()
	{
		if(!($link = mysqli_connect("localhost", "root", "", "ceprobi")))
		{
			echo "Error al conectarse a la base de datos...!";
			exit();
		}

		return $link;
	}

?>