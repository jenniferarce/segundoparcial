<?php  
session_start();

require_once('clases/direcciones.php');

$queHacer = $_POST['queHacer'];

switch ($queHacer) 
{
	case 'Guardar':
		$dato = new direcciones();
		$dato->domicilio = $_POST['domicilio'];
		$dato->Guardar();
		break;
	case 'Borrar':
		$dato = direcciones::TraerUno($_POST['id']);
		$dato->Borrar();
		break;
	case 'VerEnMapa':
		include('partes/formMapaGoogle.php');
		break;
	case 'formIngreso':
		include('partes/formIngreso.php');
		break;
	case 'formDomicilio':
		include('partes/formDomicilio.php');
		break;
	case 'MostrarGrilla':
		include('partes/formGrilla.php');
		break;
	default:
		break;
}

?>