<?php include ("conexion.php"); session_start(); ?>


<?php
$Log=$_POST['txtLogin'];
$Pas=$_POST['txtContrasena'];


$sql="SELECT * FROM usuarios WHERE login= '$Log' and contrasena = '$Pas'" ;

$resultado=$con->query($sql);
if ($fila=$resultado->fetch_assoc()) 
{
	$nivel= $fila['Nivel'];
	$login= $fila['login'];

	$_SESSION['nivel']= $nivel;
	$_SESSION['login']= $login;
	echo '<meta http-equiv="REFRESH" content="0,URL=index.php">';	
}
else
	{
		echo "USUARIO O CONTRASENA INCORRECTA";
		echo '<meta http-equiv="REFRESH" content="3,URL=login.html">';
	}
?>