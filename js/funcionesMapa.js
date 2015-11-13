function VerEnMapa(domicilio)
{
    var punto = domicilio +", Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
    url:"nexo.php",
    type:"post",
    data:{
    queHacer:"VerEnMapa"
    }
  });
    funcionAjax.done(function(retorno){
    $("#principal").html(retorno);
        $("#punto").val(punto);
         $("#id").val(id);
    
  }); 
}