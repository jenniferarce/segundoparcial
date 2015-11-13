<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
 
//session_start();
if(!isset($_SESSION['nombre'])){  ?>
    <div id="formLogin" class="container">

      <form class="form-ingreso" onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese su nombre</h2>
          <input type="text" id="nombre" name="nombre" class="form-control" title="Ingrese su nombre" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <br>
        <p>Jose o Maria</p>
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted '".$_SESSION['nombre']."' esta logeado. </h3>";?>         
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 <script type="text/javascript">
 </script>
<?php  

} ?>