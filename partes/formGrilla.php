<?php
require_once('clases/direcciones.php');
?>

<table class='table'>
	<tr>
		<th>Domicilio</th>
		<th>Borrar</th>
		<th>Ver en Mapa</th>
	</tr>
<?php
	$array_direcciones = direcciones::TraerTodos();
	if ($array_direcciones != NULL)
	{
	  	foreach ($array_direcciones as $item) 
		{
			if (isset($_SESSION['nombre'])) 
			{
				echo "<tr>
					<td>$item->domicilio</td>
					<td><button onclick='Borrar(\"$item->id\")' class='MiBotonBorrar'>Borrar</button></td>
					<td><button onclick='VerEnMapa(\"$item->domicilio\")' class='MiBotonUTN'>Ver en Mapa</td>
				</tr>";
			}
			else
			{
				echo "<tr>
					<td>$item->domicilio</td>
					<td><button onclick='ErrorBorrar()' class='MiBotonBorrar'>Borrar</button></td>
					<td><button onclick='Mapa(\"$item->domicilio\")' class='MiBotonUTN'>Ver en Mapa</td>
				</tr>";
			}
		}
	}
	else
	{
		echo "<tr>
				<td colspan='3'><center>No se encuentran direcciones.</center></td>
			</tr>";
	}
?>
</table>