<?php

	include("datos.php");
	
	$conexion = mysqli_connect($servidor, $usuario, "") or die ("¡Fallo en la conexion! Comunicarse al siguiente telefono: ");
	
	$db = mysqli_select_db($conexion,$basededatos) or die ("¡¡Error en la orden!!. Comuniquese al siguiente numero: ");
	
	$consulta = "Select * From orden";
	
	$resultado = mysqli_query($conexion, $consulta) or die ("Error en consulta de datos");
	
	echo "<table border = '2'>";
	echo 	"<tr>";
	echo 		"<th> id </th>";
	echo 		"<th> Ap_Paterno </th>";
	echo 		"<th> Ap_Materno </th>";
	echo		"<th> Nombre </th>";
	echo 		"<th> Colonia </th>";
	echo 		"<th> Calle </th>";
	echo 		"<th> Numero Exterior </th>";
	echo 		"<th> Numero Interior </th>";	
	echo 		"<th> Telefono </th>";
	echo 		"<th> E-mail </th>";
	echo 		"<th> Cantidad </th>";
	echo 		"<th> Producto </th>";
	echo 		"<th> Precio </th>";
	echo 	"</tr>";
	
	while($columna = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo 	"<td>" .$columna['id']. "</td><td>" .$columna['paterno']. "</td><td>" .$columna['materno']. "</td><td>" 
				.$columna['nombre']. "</td><td>" .$columna['colonia']. "</td><td>" .$columna['calle']. "</td><td>" 
				.$columna['numExt']. "</td><td>" .$columna['numInt']. "</td><td>" .$columna['telefono']. "</td><td>" 
				.$columna['correo']. "</td><td>" .$columna['cantidad']. "</td><td>" .$columna['producto']. "</td><td>" 
				.$columna['precio']. "</td>";
		echo "</tr>";
			 
	}
	echo "</table>";
	
	mysqli_close($conexion);
	
?>