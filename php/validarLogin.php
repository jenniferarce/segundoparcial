<?php 
$fechahora = date('d/m/y G:i');
setcookie('fechahora', $fechahora);

if ($_POST['nombre']=='Jose' || $_POST['nombre']=='Maria') 
{
	session_start();
	$_SESSION['nombre'] = $_POST['nombre'];

	echo $_COOKIE['fechahora'];
}
else
	echo 'nologin';
?>