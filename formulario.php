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

	<!--=====================================
	=               Bootstrap               =
	======================================-->

	<!--=====================================
	=               Contenedor              =
	======================================-->

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
		
		<section class="row">

			<aside class="col-lg-2 col-md-12 col-sm-12 col-xs-12">

			</aside>

			<aside class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

			<form method="post" action ="conexion.php">
					<legend><h3> Datos Personales</h3></legend>
					<br>

				<div class="form-group">
					<label for="Ap_Paterno" > Paterno: </label>
					<input type="text" class="form-control" name="paterno" autofocus="autofocus" placeholder="Apellido Paterno" value="" required>
				</div>

				<div class="form-group">
					<label for="Ap_Materno"> Materno: </label>
					<input type="text" class="form-control" name="materno" placeholder="Apellido Materno" value="" required>
				</div>
				
				<div class="form-group">
					<label for="Nombre"> Nombre: </label>
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="" required>
				</div>

				<div class="form-group">
					<label for="Colonia"> Colonia: </label>
					<input type="text" class="form-control" name="colonia" Placeholder="Colonia" value="" required>
				</div>

				<div class="form-group">
					<label for="Calle"> Calle: </label>
					<input type="text" class="form-control" name="calle" Placeholder="Calle" value="" required>
				</div>

				<div class="form-group">
					<label for="NumExt"> N° Exterior: </label>
					<input type="text" class="form-group" name="numExt" Placeholder="N° Ext." value="" size="3" required>
				</div>
				
				<div class="form-group">
					<label for="NumInt"> N° Interior: </label>
					<input type="text" class="form-group" name="numInt" Placeholder="N° Int." value="" size="3">
				</div>

				<div class="form-group">
					<label for="Telefono"> Teléfono: </label>
					<input type="text" class="form-group" name="telefono" Placeholder="Teléfono" value="" required>
				</div>

				<div class="form-group">
					<label for="Correo"> E-mail: </label>
					<input  type="email" class="form-control" name="correo" placeholder="Correo" value="" required>
				</div>
				
				<br>
					<legend> <h3> Datos del Producto </h3></legend>
					<br>
				<div class="form-group">
					<label for="Producto"> Producto: </label>
					<input  type="text" class="form-control" name="producto" value="Boxer Infinity COTTONFRESS" size="25" readonly>
				</div>
				
				<div class="form-group">
					<label for="Precio"> Precio: $ </label>
					<input type="number" class="form-control" name="precio" value="250" min="1" max="5000" placeholder="Cantidad" readonly>
				</div>
				
				<div class="form-group">
					<label for="Cantidad"> Cantidad: </label>
					<input type="number" class="form-control" name="cantidad" value="" min="1" max="40" placeholder="Cantidad" required>
				</div>
					<br>
					<!-- Boton para Paypal
					<button type="button" class="compra")>
					<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MGXCAV5NGFD9Y"> <img src= "img/paypal.jpg" height="60" width="" style="vertical-align: middle">
					Comprar
					</a></button> -->

					<button type="submit" class="btn btn-success">
						Comprar 
					</button>
			
					<button type="reset" class="btn btn-success">
						Cancelar 
					</button>
			</form>
			</aside>

			<aside class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			</aside>

		</section>
	</div>
</body>

</html>