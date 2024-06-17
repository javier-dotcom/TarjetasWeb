<?php
require_once "conectar.php";
// Consulta para seleccionar todos los campos del evento con id = 5
$consulta = "SELECT * FROM eventos WHERE id = 6";
$datos = mysqli_query($conexion, $consulta);

// Verifica si la consulta devolvió algún resultado
if ($fila = mysqli_fetch_array($datos)) {
  // Extraer todos los campos de la fila
  $id = $fila["id"];
  $nombre_cumpleanera = $fila["nombre_cumpleanera"];
  $fecha_evento = $fila["fecha_evento"];
  $hora_evento = $fila["hora_evento"];
  $lugar_evento = $fila["lugar_evento"];
  $direccion_evento = $fila["direccion_evento"];
  $imagen1 = $fila["imagen_cumpleanera1"];
  $imagen2 = $fila["imagen_cumpleanera2"];
  $imagen3 = $fila["imagen_cumpleanera3"];
  $imagen4 = $fila["imagen_cumpleanera4"];
  $imagen5 = $fila["imagen_cumpleanera5"];
  $fondo = $fila["fondo"];
  $id_frase_para_asistencia = $fila["id_frase_para_asistencia"];
  $id_frase_para_canciones = $fila["id_frase_para_canciones"];
  $id_frase_para_mensaje = $fila["id_frase_para_mensaje"];
  $id_dress_code = $fila["id_dress_code"];
  $id_frase_regalo = $fila["id_frase_para_regalo"];
}

$consultaFraseAsistencia = "SELECT * FROM frases_para_asistencia fpa WHERE fpa.id = $id_frase_para_asistencia";
$datosFraseAsistencia = mysqli_query($conexion, $consultaFraseAsistencia);
$fraseParaAsistencia = $fila = mysqli_fetch_array($datosFraseAsistencia)["texto"];

$consultaFraseCanciones = "SELECT * FROM frases_para_canciones fpc WHERE fpc.id = $id_frase_para_canciones";
$datosFraseCanciones = mysqli_query($conexion, $consultaFraseCanciones);
$fraseParaCanciones = $fila = mysqli_fetch_array($datosFraseCanciones)["texto"];


$consultaFraseMensajes = "SELECT * FROM frases_para_mensaje fpm WHERE fpm.id = $id_frase_para_mensaje";
$datosFraseMensajes = mysqli_query($conexion, $consultaFraseMensajes);
$fraseParaMensajes = $fila = mysqli_fetch_array($datosFraseMensajes)["texto"];

$consultaDressCode = "SELECT * FROM dress_code_new dcn WHERE dcn.id = $id_dress_code";
$datosDressCode = mysqli_query($conexion, $consultaDressCode);
$fraseDressCodes = $fila = mysqli_fetch_array($datosDressCode)["texto"];

$consultaFraseRegalos = "SELECT * FROM frase_para_regalo fpr WHERE fpr.id = $id_frase_regalo";
$datosFraseRegalo = mysqli_query($conexion, $consultaFraseRegalos);
$fraseParaRegalo = $fila = mysqli_fetch_array($datosFraseRegalo)["texto"];

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css" id="main-styles-link">
  <!-- <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style> -->
</head>

<body >
  <!-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div> -->
  <div class="preloader">
    <div class="preloader-logo"><img src="images/Logo-Creativa-Blanca.png" alt="" width="151" height="44" srcset="images/Logo-Creativa-Blanca.png 2x" />
    </div>
    <div class="preloader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <div class="page" >
    <!-- Page Header<a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_02.jpg" alt=""/></a> -->
    <header class="section novi-background page-header" >
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap" >
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true" >
          <div class="rd-navbar-aside-outer" style="background-image:url(../img/fondo5.png);">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel" >
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/Logo-Creativa-Blanca.png" alt="" width="151" height="44" srcset="images/Logo-Creativa-Blanca.png 2x" /></a>
              </div>
              <div class="rd-navbar-collapse" >
                <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                  <article class="unit align-items-center">
                    <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                    <div class="unit-body">
                      <ul class="list-0">
                        <li><a class="link-default" href="tel:#">1-800-1234-567</a></li>
                        <li><a class="link-default" href="tel:#">1-800-8763-765</a></li>
                      </ul>
                    </div>
                  </article>
                  <article class="unit align-items-center">
                    <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                    <div class="unit-body"><a class="link-default" href="tel:#">2130 Fulton Street <br> San Diego, CA 94117-1080</a></div>
                  </article><a class="button button-gray-bordered button-winona" href="#">Ver tarjeta</a>
                </div>
              </div>
            </div>
          </div>
      <br>
          <div class="rd-navbar-main-outer" style="background-image:url(../img/fondo5.png);">
            <div class="rd-navbar-main" >
           

              <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1" >
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav" >
                  <li class="rd-nav-item active"><a class="rd-nav-link fondo-imagen" href="index.html" style="background-color: white; color:black;margin:3px;padding:4px;border-radius:5px" >Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html" style="background-color: white; color:black;margin:3px;padding:4px;border-radius:5px">About us</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html" style="background-color: white; color:black;margin:3px;padding:4px;border-radius:5px">Typography</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html" style="background-color: white; color:black;margin:3px;padding:4px;border-radius:5px">Contacts</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <br>
    <br>  <br>
    <!------------------------------SLIDER INICIO--------------------------->
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src=<?php echo $imagen1 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen2 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen3 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen4 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen5 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen1 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen2 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen3 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen4 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen5 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen1 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen2 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen3 ?> height="100" width="250" alt="">
        </div>
        <div class="slide">
          <img src=<?php echo $imagen4 ?> height="100" width="250" alt="">
        </div>
      </div>
    </div>
    <!------------------------------SLIDER FIN------------------------------>

    <!-- <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide_video" data-slide-bg="images/slider-minimal-slide-1-1920x968.jpg">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Offering Diverse</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Properties</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">inHouse provides you with lots of great properties throughout the USA so that you could easily choose your dream property.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">View Properties</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/Bianca1.png">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Easily</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Rent & Sale</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">With the help of our services and property management solutions, you can rent or sell any house or apartment.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">View properties</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/images/Bianca2.png">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">More Than 20 Years of</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Experience</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Founded in 1989, our company is a team of renowned property management and real estate experts always ready to help you.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">View properties</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-outer container">
          <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
        </div> 
      </section>-->



    <!-- Advantages and Achievements-->
    <section class="section novi-background section-md text-center bg-gray-100">
      <div class="container" style="background-image:url(../img/fondo5.png);border-radius:20px ">
        <br>
        <h3 class="text-uppercase wow-outer" style="background-color:white; width:60%; margin:auto;border-radius:20px "><span class="wow slideInUp">El Informe de tu cumple</span></h3>
        <br>
        <p class="wow-outer"  style="background-color:white; width:60%; margin:auto;border-radius:20px "><span class="text-width-1 wow slideInDown">Las confirmaciones de asistencia, los temas pedidos y cuenta regresiva .</span></p>
        <div class="row row-50">
          <div class="col-6 col-md-3 wow-outer">
            <!-- Counter Minimal-->
            <div style="background-image:url(../img/fondo5.png);">
              <article class="counter-minimal wow slideInUp" data-wow-delay=".1s"style="background-color:white; width:90%; margin:auto;border-radius:20px ">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#3498DB" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                  </svg></div>
                <div class="counter-minimal-main">
                  <div class="counter">12</div>
                </div>
                <h5 class="counter-minimal-title">Confirmados</h5>
              </article>
            </div>
          </div>
          <div class="col-6 col-md-3 wow-outer">
            <!-- Counter Minimal-->
            <div style="background-image:url(../img/fondo5.png);">
            <article class="counter-minimal wow slideInUp" data-wow-delay=".1s"style="background-color:white; width:90%; margin:auto;border-radius:20px ">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#3498DB" class="bi bi-file-earmark-music" viewBox="0 0 16 16">
                  <path d="M11 6.64a1 1 0 0 0-1.243-.97l-1 .25A1 1 0 0 0 8 6.89v4.306A2.6 2.6 0 0 0 7 11c-.5 0-.974.134-1.338.377-.36.24-.662.628-.662 1.123s.301.883.662 1.123c.364.243.839.377 1.338.377s.974-.134 1.338-.377c.36-.24.662-.628.662-1.123V8.89l2-.5z" />
                  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                </svg></div>
              <div class="counter-minimal-main">
                <div class="counter">238</div>
              </div>
              <h5 class="counter-minimal-title">Canciones Pedidas</h5>
            </article>
          </div>
          </div>
          <div class="col-6 col-md-3 wow-outer">
            <!-- Counter Minimal-->
            <div style="background-image:url(../img/fondo5.png);">
            <article class="counter-minimal wow slideInUp" data-wow-delay=".1s"style="background-color:white; width:90%; margin:auto;border-radius:20px ">
              <div class="counter-minimal-icon box-chloe__icon novi-icon linearicons-star"></div>
              <div class="counter-minimal-main">
                <div class="counter">19</div>
              </div>
              <h5 class="counter-minimal-title">Years of Experience</h5>
            </article>
          </div>
          </div>
          <div class="col-6 col-md-3 wow-outer">
            <!-- Counter Minimal-->
            <div style="background-image:url(../img/fondo5.png);">
            <article class="counter-minimal wow slideInUp" data-wow-delay=".1s"style="background-color:white; width:90%; margin:auto;border-radius:20px ">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#3498DB" class="bi bi-calendar-check" viewBox="0 0 16 16">
                  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg></div>
              <div class="counter-minimal-main">
                <div class="counter">54</div>
              </div>
              <h5 class="counter-minimal-title">Faltan </h5>
            </article>
          </div>
          </div>
        </div>
      </div>
    </section>

















    <section class="section novi-background section-md text-center">
      <div class="container">
        <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Popular properties</span></h3>
        <div class="row row-lg-50 row-35 offset-top-2">
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
              <!-- <a class="post-modern-media" href="#">
                      <img src="images/grid-blog-1-571x353.jpg" alt="" width="571" height="353"/>
                    </a> -->

              <table class="table">
                <tr class="trEncabezado">
                  <td>
                    Nombre
                  </td>
                  <td>
                    Apellido
                  </td>
                  <td>
                    <img src="images/healthy-food.png" width="40px" alt="">
                  </td>
                  <td>
                    <img src="images/gluten-free (1).png" width="40px" alt="">
                  </td>
                  <td>
                    <img src="images/family.png" width="40px" alt="">
                  </td>
                </tr>

                <tr>
                  <td>
                    Javier
                  </td>
                  <td>
                    Dalessandro
                  </td>
                  <td>
                    Si
                  </td>
                  <td>
                    NO
                  </td>
                  <td>
                    4
                  </td>
                </tr>

                <tr>
                  <td>
                    Javier
                  </td>
                  <td>
                    Dalessandro
                  </td>
                  <td>
                    Si
                  </td>
                  <td>
                    NO
                  </td>
                  <td>
                    4
                  </td>
                </tr>


              </table>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">5619 Walnut Hill Ln, Dallas, TX 75229</a>
              </h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">$1500/mon</a></li>
                <li>30 Sq. Ft.</li>
                <li>3 Bedrooms</li>
              </ul>
              <p>A comfortable residential property located in a quiet and cozy area.</p>
            </article>
          </div>
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
              <!--<a class="post-modern-media" href="#"><img src="images/grid-blog-2-571x353.jpg" alt="" width="571" height="353"/></a> -->
              <table class="table">
                <tr class="trEncabezado">
                  <td>
                    Nombre
                  </td>
                  <td>
                    APELLIDO
                  </td>
                  <td>
                
                  <img src="images/singer.png" width="40px" alt="">
                   
                  </td>
                  <td>
                    <img src="images/music-album.png" width="40px" alt="">
                  </td>

                </tr>
              </table>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">1808 Bolingbroke Pl, Fort Worth, TX
                  76140 </a></h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">$1300/mon</a></li>
                <li>40 Sq. Ft.</li>
                <li>2 Bedrooms</li>
              </ul>
              <p>Perfect for those who love both city life and the countryside.</p>
            </article>
          </div>
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/grid-blog-3-571x353.jpg" alt="" width="571" height="353" /></a>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">924 Bel Air Rd, Los Angeles, CA 90077</a>
              </h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">1800/mon</a></li>
                <li>50 Sq. Ft.</li>
                <li>4 Bedrooms</li>
              </ul>
              <p>Located in 5 mins from downtown, this property is great for anyone.</p>
            </article>
          </div>
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/grid-blog-4-571x353.jpg" alt="" width="571" height="353" /></a>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">13510 W Cheery Lynn Rd, Avondale, AZ
                  85392</a></h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">$2700/mon</a></li>
                <li>90 Sq. Ft.</li>
                <li>2 Bedrooms</li>
              </ul>
              <p>A luxury mansion for people who enjoy the high-end amenities.</p>
            </article>
          </div>
          <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="#">view More
              properties</a></div>
        </div>
      </div>
    </section>
    <section class="section novi-background section-lg bg-gray-100">
      <div class="container">
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon linearicons-user wow fadeIn"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown">Qualified Employees</h4>
                <p class="wow fadeInUpSmall">Our team consists of more than 20 qualified and experienced real estate brokers and property managers ready to help you.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon linearicons-bubble-text wow fadeIn" data-wow-delay=".1s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Free Consultations</h4>
                <p class="wow fadeInUpSmall" data-wow-delay=".1s">Our acquaintance with a client always begins with a free consultation to find out what kind of property they are looking for.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-chloe__icon novi-icon linearicons-star wow fadeIn" data-wow-delay=".2s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">100% Guaranteed</h4>
                <p class="wow fadeInUpSmall" data-wow-delay=".2s">All the results that you get from our realtors are 100% guaranteed to offer you the best choice of properties throughout the USA.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="section novi-background section-lg text-center">
      <div class="container">
        <h3 class="text-uppercase">Residential property categories</h3>
        <p><span class="text-width-1">At our agency, we work with various types of residential real estate property. You can find out more about our properties by browsing our website.</span></p>
        <div class="row row-35 row-xxl-70 offset-top-2">
          <div class="col-sm-6 col-lg-3">
            <!-- Thumbnail Light-->
            <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/service-thumbnail-1-270x300.jpg" alt="" width="270" height="300" /></a>
              <h4 class="thumbnail-light-title"><a href="#">Single-Family Homes</a></h4>
            </article>
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Thumbnail Light-->
            <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/service-thumbnail-2-270x300.jpg" alt="" width="270" height="300" /></a>
              <h4 class="thumbnail-light-title"><a href="#">Townhouses</a></h4>
            </article>
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Thumbnail Light-->
            <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/service-thumbnail-3-270x300.jpg" alt="" width="270" height="300" /></a>
              <h4 class="thumbnail-light-title"><a href="#">Multi-Family Homes</a></h4>
            </article>
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Thumbnail Light-->
            <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/service-thumbnail-4-270x300.jpg" alt="" width="270" height="300" /></a>
              <h4 class="thumbnail-light-title"><a href="#">Condominiums</a></h4>
            </article>
          </div>
          <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="#">view all properties</a></div>
        </div>
      </div>
    </section>
    <section class="section novi-background section-lg text-center bg-gray-100">
      <div class="container">
        <h3 class="text-uppercase wow-outer"><span class="wow slideInUp">Our Team</span></h3>
        <div class="row row-lg-50 row-35 row-xxl-70 justify-content-center justify-content-lg-start">
          <div class="col-md-10 col-lg-6 wow-outer">
            <!-- Profile Creative-->
            <article class="profile-creative wow slideInLeft">
              <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-1-270x273.jpg" alt="" width="270" height="273" />
              </figure>
              <div class="profile-creative-main">
                <h5 class="profile-creative-title"><a href="#">Nathalie Porter</a></h5>
                <p class="profile-creative-position">Founder, Broker</p>
                <div class="profile-creative-contacts">
                  <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">1-800-1324-567</a></div>
                </div>
                <p>Ms. Porter founded our company in 1989 with a vision to help guests and residents of the USA to easily find and buy or rent real estate in all 50 states.</p>
              </div>
            </article>
          </div>
          <div class="col-md-10 col-lg-6 wow-outer">
            <!-- Profile Creative-->
            <article class="profile-creative wow slideInLeft" data-wow-delay=".2s">
              <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-2-270x273.jpg" alt="" width="270" height="273" />
              </figure>
              <div class="profile-creative-main">
                <h5 class="profile-creative-title"><a href="#">John Thompson</a></h5>
                <p class="profile-creative-position">Sales Associate</p>
                <div class="profile-creative-contacts">
                  <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">1-800-1324-567</a></div>
                </div>
                <p>John has been in sales and marketing for the past 15 years. He has excellent knowledge about the local market both residential and commercial.</p>
              </div>
            </article>
          </div>
          <div class="col-md-10 col-lg-6 wow-outer">
            <!-- Profile Creative-->
            <article class="profile-creative wow slideInLeft">
              <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-3-270x273.jpg" alt="" width="270" height="273" />
              </figure>
              <div class="profile-creative-main">
                <h5 class="profile-creative-title"><a href="#">Brian Payne</a></h5>
                <p class="profile-creative-position">Realtor</p>
                <div class="profile-creative-contacts">
                  <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">1-800-1324-567</a></div>
                </div>
                <p>Brian is not only a Licensed Realtor but also holds the Title Producers and Mortgage Licenses, which makes him a very knowledgeable real estate expert.</p>
              </div>
            </article>
          </div>
          <div class="col-md-10 col-lg-6 wow-outer">
            <!-- Profile Creative-->
            <article class="profile-creative wow slideInLeft" data-wow-delay=".2s">
              <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-4-270x273.jpg" alt="" width="270" height="273" />
              </figure>
              <div class="profile-creative-main">
                <h5 class="profile-creative-title"><a href="#">Marie Fernandez</a></h5>
                <p class="profile-creative-position">Broker</p>
                <div class="profile-creative-contacts">
                  <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">1-800-1324-567</a></div>
                </div>
                <p>Marie’s goal is to provide clients with the highest level of marketing expertise and customer service to help them reach their uppermost real estate goals.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Best offer-->
    <section class="section novi-background section-1 bg-primary-darker text-center" style="background-image: url(images/bg-1-1920-455.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-lg-7 col-xl-6">
            <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Best offers</span></h3>
            <p class="heading-subtitle">of September</p>
            <p class="wow-outer offset-top-4"><span class="wow slideInDown" data-wow-delay=".05s">With a variety of accountants available at our company, you can always choose one that fits your corporate requirements.</span></p>
            <div class="wow-outer button-outer"><a class="button button-primary-white button-winona wow slideInDown" href="#" data-wow-delay=".1s">Read more</a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section novi-background section-lg text-center">
      <div class="container">
        <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Testimonials</span></h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Albert Webb</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>I have just bought an apartment in LA thanks to you and your brokers. Everything went smooth and easy, the price was quite affordable, and I’m sure I will use your services again in the future.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Kelly McMillan</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>I have recently sold my rental property in Nelson via inHouse. Everything about the sale was made seamless by your team. You gave me great advice about what was necessary to expedite the sale.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Harold Barnett</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>I really appreciate your time and expertise in helping me find and buy my current home in Seattle, WA. Hope we can do business again in the future and I will recommend you to family and friends.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Bill Warner</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>I have just sold a property with inHouse and I can’t thank them enough. Their team has great communication skills and they have regularly communicated with me throughout the whole process.</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Ann Lee</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>Your skilled team helped me make the dream of selling my old property a reality. The sale went smoothly, and I just closed on an ideal new place I am excited to call home. Thank you for your great services!</p>
            </div>
          </blockquote>
          <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">Peter Clarkson</cite>
                <p class="quote-classic-caption">Regular Client</p>
              </div>
            </div>
            <div class="quote-classic-text">
              <p>I have to say that inHouse has the best brokers we've ever worked with. Their professionalism, personality, attention to detail, responsiveness and ability to close the deal are outstanding!</p>
            </div>
          </blockquote>
        </div>
      </div>
    </section><a class="banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_big_02.jpg" alt="" /></a>
    <footer class="section novi-background footer-advanced bg-gray-700">
      <div class="footer-advanced-main">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">About Us</h5>
              <p class="footer-advanced-text">inHouse is the largest full-service real estate and property management company. We offer expertise in the marketing and sale of a wide range of properties, including residential real estate, farms and lifestyle blocks, as well as commercial and industrial properties that we hope may interest you.</p>
            </div>
            <div class="col-sm-7 col-md-5 col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">Recent Blog Posts</h5>
              <!-- Post Inline-->
              <article class="post-inline">
                <p class="post-inline-title"><a href="#">Real Estate Guide: 7 Important Tips for Buying a Home</a></p>
                <ul class="post-inline-meta">
                  <li>by Mike Barnes</li>
                  <li><a href="#">2 days ago</a></li>
                </ul>
              </article>
              <!-- Post Inline-->
              <article class="post-inline">
                <p class="post-inline-title"><a href="#">Single-Family Homes as a Housing Option for Young Families</a></p>
                <ul class="post-inline-meta">
                  <li>by Mike Barnes</li>
                  <li><a href="#">2 days ago</a></li>
                </ul>
              </article>
            </div>
            <div class="col-sm-5 col-md-7 col-lg-4">
              <h5 class="font-weight-bold text-uppercase text-white">Gallery</h5>
              <div class="row row-x-10" data-lightgallery="group">
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-1.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-1-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-2.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-2-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-3.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-3-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-4.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-4-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-5.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-5-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-6.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-6-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"> </div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-7.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-7-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-8.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-8-85x85.jpg" alt="" />
                    <div class="thumbnail-minimal-caption"></div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-advanced-aside">
        <div class="container">
          <div class="footer-advanced-layout">
            <div>
              <ul class="list-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
              </ul>
            </div>
            <div>
              <ul class="foter-social-links list-inline list-inline-md">
                <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <hr />
      </div>
      <div class="footer-advanced-aside">
        <div class="container">
          <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="images/logo-light-115x34.png" alt="" width="115" height="34" srcset="images/logo-light-115x34.png 2x" /></a>
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>