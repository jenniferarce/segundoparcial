<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
<?php 
//session_start();
if(isset($_SESSION['nombre'])){  ?>
    <div class="container">

      <form class="form-ingreso" onsubmit="Guardar();return false"  id='formdireccion'>
        <h2 class="form-ingreso-heading">Ingrese el domicilio</h2>
        <select class="form-control" id="localidad">
				<option value="avellaneda">avellaneda</option>
				<option value="lanus">lanus</option>
			</select>
			<br>
			<input type="text" id="calle" name="calle" placeholder="Calle" title="Ingrese el nombre de la calle" class="form-control" required>
			<input type="num" id="numero" name="numero" placeholder="Numero" title="Ingrese el numero de su casa" class="form-control" required>

			<button type='submit' class='btn btn-info'>Guardar</button>
      </form>

    </div> <!-- /container -->

  <?php }

  else{    echo"<h3>usted no esta logeado. </h3>";?>         
   
  <?php  }  ?>
    
  
