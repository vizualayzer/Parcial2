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


        <?php include_once('header.php');

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
        <div class="col-lg-12 col-md-12 col-sm-12 ">

            <h2 class="mt-5 d-flex justify-content-center rti"> Producto </h2>

        </div>

        <?php

        require_once('clases/Productos.php');
        $Productos = new Productos($con);



        foreach ($Productos->getProductos($_GET) as $prod) {
            if ($prod['id'] == $_GET['prod']) {
                break;
            }
        }



        ?>
        <?php
        require_once('clases/comentario.php');

        $Comentarios = new Comentarios($con);
        
        if (isset($_POST['enviar_comentario'])) {
            $Comentarios->saveComentario($_POST);
        }



    $result = "";
    if (isset($_POST['submit'])) {
        require 'PhpMailer/PHPMailerAutoload.php';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'programacionweb2grupo8@gmail.com';
        $mail->Password = 'Hola1234';
        $mail->Mailer = "smtp";

        $mail->setFrom($_POST['email']);
        $mail->addAddress('programacionweb2grupo8@gmail.com');
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);
        $mail->Subject = 'comentario Tripanel';
        $mail->Body = '<h1 align=center>Hola!  ' . $_POST['name'] . ' estaremos analizando tu comentario =D ';


        if (!$mail->send()) {
            $result = "Algo esta mal, intentelo ed nuevo por favor";
        } else {
            echo "<h4> mail enviado</h4>";
        }
    }


    ?>



        <div class="super_container">
            <header class="header" style="display: none;">
                <div class="header_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                                <div class="header_search">
                                    <div class="header_search_content">
                                        <div class="header_search_form_container">
                                            <form action="#" class="header_search_form clearfix">
                                                <div class="custom_dropdown">
                                                    <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                        <ul class="custom_list clc">
                                                            <li><a class="clc" href="#">All Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="single_product">
                <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <img src="imagenes/productos/<?php echo $prod['id'] ?>/img_0_thumb.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product_description">
                                <div class="product_name">
                                    <h3><?php echo $prod['nombre'] ?></h3>
                                </div>
                                <div> <span class="product_price">
                                        <h4><?php echo $prod['precio'] ?></h4>
                                    </span></div>
                                <hr class="singleline">
                                <div> <span class="product_info">
                                        <h6>Descripcion <?php echo $prod['descripcion'] ?>
                                            <section>

                                                <div class="container listadodivcards">








                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <article>

                                                                <form action="#" method="post">
                                                                    <fieldset>

                                                                        <div class="row">

                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="well well-sm">
                                                                                            <form class="form-horizontal" method="post">
                                                                                                <fieldset>
                                                                                                    <legend class="text-center header">Comentarios</legend>

                                                                                                    <div class="form-group">
                                                                                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                                                                                        <div class="col-md-8">
                                                                                                            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                                                                                        <div class="col-md-8">
                                                                                                            <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group">
                                                                                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                                                                                        <div class="col-md-8">
                                                                                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                                                                                        </div>
                                                                                                    </div>


                                                                                                   
                                                                                                    <div class="form-group">
                                                                                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                                                                                        <div class="col-md-8">

                                                                                                        

                                                                                                        
                                                                                                            <textarea class="form-control" id="message" name="message" placeholder="Ingrese sus comentarios sobre el producto" rows="7"><?php
                                                                                                        if(isset($_POST['message'])){
                                                                                                            echo $_POST['message'];
                                                                                                        }?></textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group">
                                                                                                        <div class="col-md-12 text-center">
                                                                                                            <button type="submit" name="enviar_comentario" value="Enviar" class="btn btn-primary btn-lg">Enviar</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <select name="rankeo">
                                                                                <option value="1">*</option>
                                                                                <option value="2">**</option>
                                                                                <option value="3">***</option>
                                                                                <option value="4">****</option>
                                                                                <option value="5">*****</option>


                                                                            </select>


                                                                            <input type="hidden" name="id" value="<?php echo $_GET['prod'] ?>">





                                                                    </fieldset>
                                                                </form>
                                                            </article>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                            <article class="card cardcomentarios">

                                                            </article>
                                                        </div>






                                                    </div>
                                                </div>
                                            </section>

                                            <hr class="singleline">
                                            <div class="order_info d-flex flex-row">
                                                <form action="#">
                                            </div>
                                            <div class="row">
                                            </div>
                                </div>
                                <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>

                                    <div class="span6 relative">

                                        <div class="absoluteBlk">


                                        </div>
                                    </div>




                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>



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