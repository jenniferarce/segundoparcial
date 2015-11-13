<?php  
session_start();

$_SESSION[] = NULL;

session_destroy();
if (isset($_COOKIE['fechahora'])) 
{
	unset($_COOKIE['fechahora']);
	setcookie('fechahora', null, time()-1, '/');
}


header('location:../index.html');
?>