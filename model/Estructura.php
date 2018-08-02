<?php

  /**
   *
   */
  class Estructura{
    public function getHeadIndex(){
      print '
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>La Vie En Rose | Floreria</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="Pagina de floreria en Tehuacán" />
          <meta name="keywords" content="floreria, floreria tehuacán, flores" />
          <link rel="icon" href="assets/images/logo3.png">
          <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
          <!-- Animate.css -->
          <link rel="stylesheet" href="assets/css/animate.css">
          <!-- Icomoon Icon Fonts-->
          <link rel="stylesheet" href="assets/css/icomoon.css">
          <!-- Bootstrap  -->
          <link rel="stylesheet" href="assets/css/bootstrap.css">
          <!-- Owl Carousel -->
          <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
          <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
          <link rel="stylesheet" href="assets/css/style.css">
          <!-- Modernizr JS -->
          <script src="assets/js/modernizr-2.6.2.min.js"></script>
          <!-- FOR IE9 below -->
          <!--[if lt IE 9]>
          <script src="assets/js/respond.min.js"></script>
          <![endif]-->
        </head>
      ';
    }

    public function getMenuIndex(){
      print '
      <header role="banner" id="fh5co-header">
        <div class="container">
          <nav class="navbar navbar-default">
            <div class="row">
              <div class="col-md-3">
                <div class="fh5co-navbar-brand">
                  <a class="fh5co-logo" href="index.php">La Vie En Rouse</a>
                </div>
              </div>
              <div class="col-md-9 main-nav">
                <ul class="nav text-right">
                  <li class="active"><a href="index.php"><span>Inicio</span></a></li>
                  <li><a href="view/services.php">Servicios</a></li>
                  <li><a href="view/product.php">Productos</a></li>
                  <li><a href="view/about.php">Nosotros</a></li>
                  <li><a href="view/contact.php">Contacto</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      ';
    }

    public function getScriptIndex(){
      print '
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Waypoints -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <!-- Parallax Stellar -->
        <script src="assets/js/jquery.stellar.min.js"></script>
        <!-- Main JS (Do not remove) -->
        <script src="assets/js/main.js"></script>
      ';
    }

    public function getHead(){
      print '
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La Vie En Rose | Floreria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina de floreria en Tehuacán" />
        <meta name="keywords" content="floreria, floreria tehuacán, flores" />
        <link rel="icon" href="../assets/images/logo3.png">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="../assets/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="../assets/css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <!-- Modernizr JS -->
        <script src="../assets/js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="../assets/js/respond.min.js"></script>
        <![endif]-->
      </head>
      ';
    }

    public function getMenu($pagina){
      if ($pagina == 1) {
        print '
        <header role="banner" id="fh5co-header">
          <div class="container">
            <nav class="navbar navbar-default">
              <div class="row">
                <div class="col-md-3">
                  <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php">La Vie En Rouse</a>
                  </div>
                </div>
                <div class="col-md-9 main-nav">
                  <ul class="nav text-right">
                    <li><a href="../index.php"><span>Inicio</span></a></li>
                    <li class="active" ><a href="services.php">Servicios</a></li>
                    <li><a href="product.php">Productos</a></li>
                    <li><a href="about.php">Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
        ';
      }elseif ($pagina == 2) {
        print '
        <header role="banner" id="fh5co-header">
          <div class="container">
            <nav class="navbar navbar-default">
              <div class="row">
                <div class="col-md-3">
                  <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php">La Vie En Rouse</a>
                  </div>
                </div>
                <div class="col-md-9 main-nav">
                  <ul class="nav text-right">
                    <li><a href="../index.php"><span>Inicio</span></a></li>
                    <li><a href="services.php">Servicios</a></li>
                    <li class="active" ><a href="product.php">Productos</a></li>
                    <li><a href="about.php">Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
        ';
      }elseif ($pagina == 3) {
        print '
        <header role="banner" id="fh5co-header">
          <div class="container">
            <nav class="navbar navbar-default">
              <div class="row">
                <div class="col-md-3">
                  <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php">La Vie En Rouse</a>
                  </div>
                </div>
                <div class="col-md-9 main-nav">
                  <ul class="nav text-right">
                    <li><a href="../index.php"><span>Inicio</span></a></li>
                    <li><a href="services.php">Servicios</a></li>
                    <li><a href="product.php">Productos</a></li>
                    <li class="active" ><a href="about.php">Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
        ';
      }elseif ($pagina == 4) {
        print '
        <header role="banner" id="fh5co-header">
          <div class="container">
            <nav class="navbar navbar-default">
              <div class="row">
                <div class="col-md-3">
                  <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php">La Vie En Rouse</a>
                  </div>
                </div>
                <div class="col-md-9 main-nav">
                  <ul class="nav text-right">
                    <li><a href="../index.php"><span>Inicio</span></a></li>
                    <li><a href="services.php">Servicios</a></li>
                    <li><a href="product.php">Productos</a></li>
                    <li><a href="about.php">Nosotros</a></li>
                    <li class="active" ><a href="contact.php">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
        ';
      }

    }

    public function getFooter(){
      print '
      <footer>
        <div id="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <p>Copyright 2018 <a href="#">La Vie En Rouse</a>. Todos los derechos reservados. <p>
                <p class="fh5co-social-icons">
                  <a href="#"><i class="icon-twitter-with-circle"></i></a>
                  <a href="https://www.facebook.com/LaVieEnRoseOficial/" target="_blank"><i class="icon-facebook-with-circle"></i></a>
                  <a href="#"><i class="icon-instagram-with-circle"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
        ';
    }

    public function getScript(){
      print '
      <!-- jQuery -->
      <script src="../assets/js/jquery.min.js"></script>
      <!-- jQuery Easing -->
      <script src="../assets/js/jquery.easing.1.3.js"></script>
      <!-- Bootstrap -->
      <script src="../assets/js/bootstrap.min.js"></script>
      <!-- Owl carousel -->
      <script src="../assets/js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="../assets/js/jquery.waypoints.min.js"></script>
      <!-- Parallax Stellar -->
      <script src="../assets/js/jquery.stellar.min.js"></script>
      <!-- Main JS (Do not remove) -->
      <script src="../assets/js/main.js"></script>
      ';
    }
    
  }

?>
