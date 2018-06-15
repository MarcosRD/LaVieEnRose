<?php include_once './Logica/BD.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Style.css">
        <title>La Vie En Rose</title>
    </head>
    <body>
        <?php echo menu(); ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-caption">
                    <h3>La Vie En Rose</h3>
                    <p>Regalos para todos !!</p>
                </div>
                <div class="item active">
                    <img src="imagenes/fondo1.png" alt="Chania">

                </div> 

                <div class="item">
                    <img src="imagenes/1-flores-para-mama.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <!--                        <h3>Chicago</h3>
                                                <p>Thank you, Chicago!</p>-->
                    </div>
                </div>

                <div class="item">
                    <img src="imagenes/2-flores-para-mama-2560x1440.jpg" alt="New York">
                    <div class="carousel-caption">
                        <!--                        <h3>New York</h3>
                                                <p>We love the Big Apple!</p>-->
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="cont" class="row">
            <div class="container">
                <div class="parra" class="col-md-12">
                    <h2 class="x">ENVÍO DE FLORES A DOMICILIO EN DF Y MÁS DE 20 CIUDADES</h2>
                    <p>Alto diseño en flores y arreglos florales con una propuesta innovadora.<br>
                        La Vie En Rose es una tienda de Flores en Línea en México. <br>En nuestras florerías cont
                        amos con entrega
                        de flores a domicilio.</p>
                    <hr style="max-width: 800px; background-color: #000; height: 2px;"><br>
                    <h1>ENVÍA REGALOS A DOMICILIO</h1>
                    <p>Encuentra regalos originales elaborados con un diseño único, fresco y especial.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagenes/logo2.png">
                    <h1>Regalos </h1>
                </div>
                <div class="col-md-6">
                    <img src="imagenes/logo2.png">
                    <h1>Regalos </h1>
                </div>
                <div class="col-md-3"><img src="imagenes/logo2.png"></div>
                <div class="col-md-3"><img src="imagenes/logo2.png"></div>
                <div class="col-md-3"><img src="imagenes/logo2.png"></div>
                <div class="col-md-3"><img src="imagenes/logo2.png"></div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-3">
                    <h4>CONTACTANOS</h4>
                    <ul>
                        <li>TEL. 01 238 401 6707</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>ATENCION AL CLIENTE</h4>
                </div>
                <div class="col-lg-3">
                    <h4>SIGUENOS</h4>
                </div>
                <div class="col-lg-3">
                    <h4>LA VIE EN ROSE</h4>
                </div>
            </div>
        </div>
        <?php ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/main.js"></script>-->
</html>
