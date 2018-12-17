<?php 

	 function conectar() {
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "php_login_database";

		$conexion = new mysqli($host, $user, $pass, $db);



		if ($conexion-> connect_errno > 0) {
			echo "ERROR:".$conexion->error."<br>";
		} else {
			
			return $conexion;
		}
	}

	 function desconectar($conexion){
		mysql_close($conexion);
	}
?>