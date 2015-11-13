function Guardar()
{
	var localidad = $('#localidad').val();
	var calle = $('#calle').val();
	var numero = $('#numero').val();

	var dato = localidad + ', ' + calle + ', ' + numero;

	var funajax = $.ajax({
	url: 'nexo.php',
	type: 'post',
	data:{
		queHacer:'Guardar',
		domicilio:dato
	}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function Borrar(id_borrar)
{
	var funcionAjax=$.ajax({
		url:'nexo.php',
		type:'post',
		data:{
			queHacer: 'Borrar',
			id:id_borrar
		}
	});
	funcionAjax.done(function()
	{
		Mostrar('MostrarGrilla');
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}