<!DOCTYPE html>

<html lang="es-MX">

<head>

	<!--===========================================
	=            Etiquetas Meta                   =
	= No se ven directamente en la pagina, pero   = 
	= sirven para encontrar la pagina en los      =
	= buscadores web							  =
	============================================-->

	<meta charset="utf-8">

	<meta name="author" content="Gilver_Dk555">

	<meta name="description" content="Nos especializamos en la fabricación y venta de ropa de todo tipo: deportiva, interior, entre otros">

	<meta name="keywords" content="Tienda, Ropa, Compra, Ropa interior, Higiene, Salud, Cubrebocas, mascara, Venta de ropa">

	<!--===========================================
	= Etiqueta Meta para diseño web responsivo    =
	============================================-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--==========================================
	=             Enlaces y Scripts              =
	= Icono en la pestaña de la pagina			 =
	= Fuente de Internet                         =
	= Hojas de estilo                            =
	= Hojas de estilo de Bootstrap				 =
	= JQUERY									 =
	===========================================-->

	<link rel="icon" href="img/logo-3419889_1920.png">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<title>Yo soy todo</title>

</head>

<body>

	<div class="container-fluid">

		<!--=====================================
		=                Cabezote               =
		======================================-->
		
		<header class="row">
			<div id="logo" class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
				<img class="img-fluid" src="img/logo_ver2.png" width="500px" height="500px">
			</div>
			<div id="leyenda" class="col-lg-8 col-md-9 col-sm-8 col-xs-12"> 
					<h1> Yo soy todo en diseño y confección </h1>
			</div>
		</header>


		<!--=====================================
		=                Botonera               =
		======================================-->

		<nav id="botonera" class="navbar navbar-expand-sm bg-dark navbar-dark">
			<form class="form-inline" action="/action_page.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="Busqueda">
				<button class="btn btn-success" type="submit">Buscar</button>
			</form>
			<ul class="navbar-nav">
				<li class="nav-item"> 
					<a class="nav-link" href="index.html"> Inicio </a>
				</li>
				<li class="nav-item"> 
					<a class="nav-link disabled" href="#"> Dama</a>
				</li>
				<li class="nav-item"> 
					<a class="nav-link" href="caballero.html"> Caballero </a></li>
				<li class="nav-item"> 
					<a class="nav-link disabled" href="a"> Higiene </a>
				</li>
			</ul>
		</nav>
		<br>

		<!--=====================================
		=            Seccion principal          =
		======================================-->
		
		<?php
	
		include("datos.php");
					
		$conexion = mysqli_connect($servidor, $usuario, "") or die ("¡Fallo en la conexion! Comunicarse al siguiente telefono: ");
	
		$db = mysqli_select_db($conexion,$basededatos) or die ("¡¡Error en la orden!!. Comuniquese al siguiente numero: ");
		
		$venta = "SELECT id, paterno, materno, nombre, colonia, calle, numExt, numInt, telefono, correo, cantidad, producto, precio FROM orden ORDER BY id DESC LIMIT 1";
		
			mysqli_query($conexion,"insert into orden 
			(paterno,materno,nombre,colonia,calle,numExt,numInt,telefono,correo,cantidad,producto,precio)
			values 
			('$_POST[paterno]','$_POST[materno]','$_POST[nombre]','$_POST[colonia]','$_POST[calle]','$_POST[numExt]','$_POST[numInt]','$_POST[telefono]','$_POST[correo]',
			'$_POST[cantidad]','$_POST[producto]','$_POST[precio]')");
			
			echo  '<center><h1>Datos personales </h1></center>';
			$paterno = $_POST['paterno'];
			$materno = $_POST['materno'];
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$colonia = $_POST['colonia'];
			$calle = $_POST['calle'];
			$numExt = $_POST['numExt'];
			$numInt = $_POST['numInt'];
			$telefono = $_POST['telefono'];
			$producto = $_POST['producto'];
			$cantidad = $_POST['cantidad'];
			$precio= $_POST['precio'];

			$total = $cantidad * $precio;

			echo '<br>';
			echo '<p> Nombre: '.$paterno.' '.$materno. ' '. $nombre. '</p>'; 
			echo '<p> Correo: '.$correo. '</p>';
			echo '<p> Colonia: ' .$colonia. '</p>';
			echo '<p> Calle: ' .$calle. '</p>';
			echo '<p> N° Exterior: ' .$numExt. '</´p>';
			echo '<p> N° Interior: ' .$numInt. '</p>';
			echo '<p> Telefono: ' .$telefono.'</p>';


$resultado = mysqli_query($conexion, $venta) or die ("Error en consulta de datos");
	
	echo "<center> <table border= '0'>";
	echo 	"<tr>";
	echo 		"<th> <h3> <center> Comprobante de Compra </h3></center></th>";
	echo 	"</tr>";
	
	while($columna = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo 	"<td><center>" .$columna['id']. "</td></center>";
		echo "</tr>";
	}
	echo "</table> </center> ";
			echo '<p> Producto: ' .$producto.'</p>';			
			echo '<p> Cantidad: ' .$cantidad. '</p>'; 
			echo '<p> Precio: $' .$precio.'</p>';
			echo '<p> Total a pagar: $' .$total. '</p>';
			echo '<br>';
			echo '<br>';
	
	mysqli_close($conexion);
	
	?>


	</div>

</body>
</html>