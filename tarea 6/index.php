<?php session_start();
if (!isset($_SESSION['login']))
{
	echo '<meta http-equiv="REFRESH" content="0,URL=login.html">';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Maquetado Web</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
	<div class="cuerpo">
		<div class="cabecera">
			<div id="cabeceraImagen">
				<br><br>
				
			</div>
			<div id="cabeceraContenido">
				<br>
					<h1>BIENVENIDO AL HOTEL TARABUCO</h1> <br>
					<h2>USUARIO: <?php echo $_SESSION['login']; ?> </h2>
					<h2>NIVEL:<?php echo $_SESSION['nivel']; ?> </h2>
			</div>
		</div>
		<div class="menu">
				<ul class="menu">
		<li><a href="tipohabitacion.php" title="Habitacion">Habitaciones</a></li>
		<li><a href="tipohabitacion.php" title="Tipo Habitacion">Tipo Habitacion</a></li>
		<li><a href="" title="Reservas">Reservas</a></li>
		<li><a href="cerrar.php" title="Salir">Salir</a></li>

	</ul>
			
		</div>
		<div class="contenido">
	

		</div>
	</div>
</body>
</html>