<?php 
$n=$_GET["mes"];
?>
<select>
	<option value="1" <?php if ($n==1) { echo "selected";} ?>>Enero</option>
	<option value="2" <?php if ($n==2) { echo "selected";} ?>>Febrero</option>
	<option value="3" <?php if ($n==3) { echo "selected";} ?>>Marzo</option>
	<option value="4" <?php if ($n==4) { echo "selected";} ?>>Abril</option>
	<option value="5" <?php if ($n==5) { echo "selected";} ?>>Mayo</option>
	<option value="6" <?php if ($n==6) { echo "selected";} ?>>Junio</option>
	<option value="7" <?php if ($n==7) { echo "selected";} ?>>Julio</option>
	<option value="8" <?php if ($n==8) { echo "selected";} ?>>Agosto</option>
	<option value="9" <?php if ($n==9) { echo "selected";} ?>>Setiembre</option>
	<option value="10" <?php if ($n==10) { echo "selected";} ?>>Octubre</option>
	<option value="11" <?php if ($n==11) { echo "selected";} ?>>Noviembre</option>
	<option value="12" <?php if ($n==12) { echo "selected";} ?>>Diciembre</option>
</select>