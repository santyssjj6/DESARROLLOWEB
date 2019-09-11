<?php
	$filas = $_GET["textan"];
	$altura = $_GET["textbn"];
	$columnas = $_GET["textcn"];
	$ancho = $_GET["textdn"];
?>
<table border="3">
	<?php
		for($i = 1 ; $i <= $filas ; $i++){
	?>
		<tr>
	<?php
			for($j = 1 ; $j <= $columnas ; $j++){			
	?>
		<td>
			<?php echo $i * $j;
		} ?>
		</td>
	<?php } ?>
	</tr>
</table>
