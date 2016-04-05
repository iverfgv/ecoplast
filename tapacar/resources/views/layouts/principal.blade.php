<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="ico/favicon.ico">

  <title>TAPA-CAR</title>

  <!-- CSS Plugins -->
  <link href="css/plugins/animate.css" rel="stylesheet">
  <link href="css/plugins/lightbox.css" rel="stylesheet">
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  <!-- CSS Custom -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

<!-- seccion de los tabs -->
  <link href='css/animate.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body class="classic" data-spy="scroll" data-target=".scrollspy_menu">

    <!-- PRELOADER
    ============================== -->
    <!-- <div class="preloader">
      <img src="img/preloader.gif" alt="Loading..." class="preloader__img">
    </div> -->


    <!-- NAVBAR
    ============================== -->
    <div class="navbar navbar-default navbar__initial navbar-fixed-top scrollspy_menu" role="navigation">
      <div class="container">
        <div class="navbar-header" style="width: 20%;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#inicio"><img src="img/logo.png" style="width:50%;" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="fullpage__nav nav navbar-nav navbar-right">
            <li><a href="{!! url().'#inicio'; !!}">Bienvenido</a></li>
            <li><a href="{!! url().'#proteccion'; !!}">Protección</a></li>
            <li><a href="{!! url().'#comprar'; !!}">Comprar</a></li>
            <li><a href="{!! url().'#colocacion'; !!}">Colocación</a></li>
            <li><a href="{!! url().'#caracteristicas'; !!}">Distribuidores</a></li>
            <li><a href="{!! url().'#comparacion'; !!}">Comparación</a></li>
            <li><a href="{!! url().'#contactanos'; !!}">Contáctanos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <!-- SIDEBAR
    ============================== -->

    <!-- Sidebar button open -->
    <div class="hidden sidebar__btn sidebar__btn_open">
      <span class="sidebar-btn__caption">Menu</span> 
      <span class="oi oi-menu sidebar-btn__icon sidebar-btn-icon__unhover " title="Open menu" aria-hidden="true"></span>
      <span class="oi oi-arrow-left sidebar-btn__icon sidebar-btn-icon__hover" title="Open menu" aria-hidden="true"></span>
    </div>

    <!-- Sidebar menu -->
    <div class="sidebar__menu sidebar__menu_hidden scrollspy_menu">

      <!-- Sidebar button close -->
      <div class="sidebar__btn sidebar__btn_close">
        <span class="sidebar-btn__caption">Menu</span> 
        <span class="oi oi-menu sidebar-btn__icon sidebar-btn-icon__unhover " title="Close menu" aria-hidden="true"></span>
        <span class="oi oi-arrow-right sidebar-btn__icon sidebar-btn-icon__hover" title="Close menu" aria-hidden="true"></span>
      </div>

      <!-- Sidebar brand name -->
      <div class="sidebar-menu__brand">TAPA-CAR</div>

      <!-- Sidebar links -->
      <ul class="fullpage__nav sidebar-menu__ul nav">
            <li><a href="{!! url().'#inicio'; !!}">Bienvenido</a></li>
            <li><a href="{!! url().'#proteccion'; !!}">Protección</a></li>
            <li><a href="{!! url().'#comprar'; !!}">Comprar</a></li>
            <li><a href="{!! url().'#colocacion'; !!}">Colocación</a></li>
            <li><a href="{!! url().'#caracteristicas'; !!}">Distribuidores</a></li>
            <li><a href="{!! url().'#comparacion'; !!}">Comparación</a></li>
            <li><a href="{!! url().'#contactanos'; !!}">Contáctanos</a></li>
      </ul>

    </div> <!-- / .sidebar-menu__ul -->


    <!-- WELCOME
    ============================== -->
    @yield('content')

<!-- Google Map -->
<!--<div class="site-wrapper">-->
<!--<div id="map-canvas" class="contact__map"></div>-->
<!--</div> &lt;!&ndash; / .site-wrapper &ndash;&gt;-->


    <!-- FOOTER
    ============================== -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            2015 &copy; TAPA-CAR. Todos los derechos reservados.
          </div>
          <div class="col-xs col-sm-6">
            <div class="social__items">
              <a href="#" class="social__item">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social__item">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" class="social__item">
                <i class="fa fa-google-plus"></i>
              </a>
            </div> <!-- / .social__links -->
          </div>
        </div>
      </div>
    </footer>


    <!-- JavaScript
    ================================================== -->
    
    <!-- JS Global -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!-- JS Plugins -->
    <script src="js/plugins/jquery.parallax-1.1.3.js"></script>
    <script src="js/plugins/smoothscroll.js"></script>
    <script src="js/plugins/jquery.waypoints.min.js"></script>
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="js/plugins/isotope.pkgd.min.js"></script>
    <script src="js/plugins/lightbox.min.js"></script>
    <script src="js/plugins/contact.js"></script>
    <script src="js/plugins/google-maps.js"></script>
    
    <!-- JS Custom -->
    <script src="js/custom_classic.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>