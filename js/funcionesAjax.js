function Mostrar(quemostrar)
{
	var funcionAjax = $.ajax({
	url: 'nexo.php',
	type: 'post',
	data:{queHacer: quemostrar}
	});
	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
		funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}
function ErrorBorrar()
{
	alert('No esta registrado.');
}

function validarLogin()
{
	var nombre=$('#nombre').val();

	var funcionAjax = $.ajax({
	url:'php/validarLogin.php',
	type: 'post',
	data:{
		nombre:nombre
	}
	});
	funcionAjax.done(function(retorno)
	{
		if (retorno == 'nologin'){
			$('#principal').html('<center>No se encuentra.</center>')
		}else{
			$('#principal').html('<center>Usted esta Logeado :)</center>');
			$('#Contador').html(retorno);
		}
		
	});
		funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/logout.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			Mostrar('formIngreso');
			$("#nombre").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});	
}