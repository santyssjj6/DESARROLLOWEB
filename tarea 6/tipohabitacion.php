<?php include ("conexion.php"); session_start(); ?>
<?php
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
			<?php 
				$sql="SELECT * FROM tipohabitacion" ;
				$resultado=$con->query($sql);
				echo '<table border="2">';
				echo "<tr>
						<td>Id</td>
						<td>Tipo</td>
					  </tr>";
				while ($fila=$resultado->fetch_assoc()) //tr crea filas y td columnas
				{
					echo "<tr>" ;
					echo "<td>".$fila['id_tipohabitacion']."</td>";
					echo "<td>".$fila['habitacion']."</td>";
					echo "</tr>";
				}
				echo "</table>";
						 
							
							//if($_SESSION['nivel']==1)
							//{
							//			e<li><a href="eliminar.php" title="Eliminar">Eliminar</a></li>
							//			<li><a href="editar.php" title="Editar">Editar</a></li>
							//}
			
						 

			 ?>

		</div>
	</div>
</body>
</html>