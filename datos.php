<?php
	
	$usuario = "root";
	$contrasena = "contrasena";
	$servidor = "localhost";
	$basededatos = "pedidos";
	
	$conexion = mysqli_connect($servidor, $usuario, "") or die ("¡Fallo en la conexion! Estamos solucionando este problema tecnico, lamentamos las molestias");
	
	$db = mysqli_select_db($conexion,$basededatos) or die ("¡¡Error en la orden!! ");
?>
