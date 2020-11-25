<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TriPanel</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	
 
</head>

<body class="bgid">
 <!--                             Header                                    -->


<div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
  

<?php include_once ('header.php');
?>
    </div>
    <nav class=" navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation">
          <a href="index.php"><img src="../imagenes/LogoTriPanel%20(1).ico" width="86" alt="" > </a> 
           
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="producto.php">Productos</a>
                    </li>
                   
					<li class="nav-item">
                        <a class="nav-link" href="contactos.php" tabindex="-1" aria-disabled="true">Contactenos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logueo.php" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

 <!--                             Header                                    -->
    <!--<a href="index.html "><img src="imagenes/LogoTriPanel%20(1).ico" width="86" alt="" > </a> </!-->

    <main>
    <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">
	
						<h2 class="mt-5 d-flex justify-content-center rti">  Listado de productos </h2>
	
					</div>
	<section class="listita">
			    
				 <div class="row">    		

				<!--SECCION DOS Y ACA VA CODIGO DE ASIDE---->	
					
				<?php include_once('nav-aside.php'); ?>					
					
				<!--SECCION DOS Y ACA ARTICULOS DE PROD-EN-LIST AL COSTADO DEL ASIDE---->
			
			     <?php include_once('prod-en-listado.php'); ?>				
             
             </div>
            </div>
           </div>
         
    </section>


    </main>
	
	 <!-------------------FOOTER------------------------------------>
	 
	    <?php include('footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="plugins/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>




</body>

</html>