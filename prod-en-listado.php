
<div class="col-lg-9 col-md-9 col-sm-12">

<div class="row">


	 <?php
require "clases/comentario.php";
require_once('clases/productos.php');


$Productos = new Productos($con);
foreach($Productos->getProductos($_GET) as $prod){

	?>

	  <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="well well-small ">
			 <div class="thumbnail">
			 <a href="producto-comprar.php?prod=<?php echo $prod['id']?>"> <img class="" src="imagenes/productos/<?php echo $prod['id']?>/img_0_thumb.png" alt="cartel de garantia" width="100%"></a>
			  <div class="caption">
	                <p class="card-text text-center"><?php echo $prod ['nombre']?></p>
					<h6 class="text-center"><?php echo $prod ['precio']?> </h6>
					<a href="#" class="btn btn-primary">Comprar</a>

                   </div>
                </div>
          </div>
		  </div>
	<?php 
	}?>

	 </div>
	 </div>

