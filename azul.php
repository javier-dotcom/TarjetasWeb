<?php
session_start();
require_once "conectar.php";
// Consulta para seleccionar todos los campos del evento con id = 5
$consulta = "SELECT * FROM eventos WHERE id = 6";
$datos = mysqli_query($conexion, $consulta);
// Verifica si la consulta devolvió algún resultado
if ($fila = mysqli_fetch_array($datos)) {
  // Extraer todos los campos de la fila
  $id = $fila["id"];
  $_SESSION['id_evento'] = $id;
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
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitaciones Virtuales</title>
  <link rel="stylesheet" href="azul.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sevillana&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    [data-aos] {
      visibility: hidden;
    }

    [data-aos].animated {
      visibility: visible;
    }
  </style>
</head>

<body>

  <nav class="navbar  fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-image:url('img/Bianca2.png'); background-size:cover; background-repeat: no-repeat; background-position: center;">


        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo $nombre_cumpleanera; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Lista Invitados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Canciones Pedidas</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>



  <div class="background-image">
    <div class="content-container">


      <h1 class="teEspero"> Mis 15 Años </h1>
      <h1 class="teEspero"><span><?php echo $nombre_cumpleanera; ?></span></h1>

      <h2 class="teEspero">Te Espero</h2>


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

      <h2 class="elSalon">En el Salón</h2>
      <h2 class="elSalon">El Fiestero</h2>


      <br>

      <div class="diaFecha">
        <h3 class="letraSmall">Miercoles</h3>
        <h3 class="numeroBig">23</h3>
        <h3 class="letraSmall">De Julio</h3>
      </div>




      <br><br>
      <br>
      <br>
      <br><br>
      <br>
      <br>
      <br>

      <div class="wrapper">
        <div class="carousel">

          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/relog.png" width="70px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Hora Evento</p>
              <p><?php echo $hora_evento; ?></p>
            </div>
          </div>


          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/traje.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>
          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/vestido.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>

          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/relog.png" width="70px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Hora Evento</p>
              <p><?php echo $hora_evento; ?></p>
            </div>
          </div>


          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/traje.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>
          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/vestido.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>


          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/relog.png" width="70px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Hora Evento</p>
              <p><?php echo $hora_evento; ?></p>
            </div>
          </div>


          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/traje.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>
          <div class="carousel__item">
            <div class="carousel__item-head">
              <img src="img/vestido.png" width="80px" alt="">
            </div>
            <div class="carousel__item-body">
              <p class="title">Dress Code</p>
              <p><?php echo $fraseDressCodes ?></p>
            </div>
          </div>



        </div>
      </div>


      <br>
      <div class="container-2">
        <div class="image-container-2">
          <img src="img/fondo24.png" alt="Imagen 2" class="image-2">
          <p class="image-caption"><?php echo $fraseParaAsistencia; ?><br> <img src="img/love-letter.png" width="50px" alt="">

          </p>

        </div>
      </div>
      <br>

      <div class="accordion" id="accordionExample">




        <div class="accordion-item ">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <h5 class="collapsedh5">Confirma Asistencia</h5>

            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form action="grabarAsistencia.php" method="get">

                <div class="inputAsistencia">

                  <div class="inputAsistencia1">
                    <p>Nombre</p>
                    <input class="inputAsistencia2" type="text" name="nombreInvitado" id="">
                  </div>
                  <div class="inputAsistencia1">
                    <p>Apellido</p>
                    <input class="inputAsistencia2" type="text" name="apellidoInvitado" id="">
                  </div>
                </div>
                <hr>
                <div class="inputAsistencia1">
                  <p>Celíaco</p>
                  <div class="inputAsistencia">
                    <div class="inputAsistencia1check">
                      <input class="form-check-input " type="radio" name="celiaco" id="celiacoSi" value="si">
                      <label class="form-check-label" for="celiacoSi">Sí</label>
                    </div>
                    <div class="inputAsistencia1check">
                      <input class="form-check-input" type="radio" name="celiaco" id="celiacoNo" value="no">
                      <label class="form-check-label" for="celiacoNo">No</label>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="inputAsistencia1">
                  <p>Vegetariano</p>
                  <div class="inputAsistencia">
                    <div class="inputAsistencia1check">
                      <input class="form-check-input" type="radio" name="vegetariano" id="vegetarianoSi" value="si">
                      <label class="form-check-label" for="vegetarianoSi">Sí</label>
                    </div>
                    <div class="inputAsistencia1check">
                      <input class="form-check-input" type="radio" name="vegetariano" id="vegetarianoNo" value="no">
                      <label class="form-check-label" for="vegetarianoNo">No</label>
                    </div>
                  </div>
                </div>
                <hr>
                <button type="submit" class="enviar">Enviar</button>
              </form>
              <div class="verListaInvitados">
                <a href="asistencia.php"> Ver Lista Invitados</a>
              </div>
            </div>

          </div>
        </div>



        <br>
        <div class="container">
          <div class="image-container">

            <img src=<?php echo $imagen1 ?> alt="Descripción de la imagen" class="image right">
          </div>
        </div>

        <br>
        <div class="container-2">
          <div class="image-container-2">
            <img src="img/fondo24.png" alt="Imagen 2" class="image-2">
            <p class="image-caption"><?php echo $fraseParaMensajes; ?><br> <img src="img/love.png" width="50px" alt="">
            </p>

          </div>
        </div>
        <br>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h5 class="collapsedh5"> Dejar un Mensaje</h5>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              
<form action="grabarMensaje.php" method="get">
    <div class="inputAsistencia">
        <div class="inputAsistencia1">
            <p>Nombre</p>
            <input class="inputAsistencia2" type="text" name="nombreInvitado" id="">
        </div>
        <div class="inputAsistencia1">
            <p>Apellido</p>
            <input class="inputAsistencia2" type="text" name="apellidoInvitado" id="">
        </div>
    </div>

    <hr>

    <div class="inputAsistencia1">
        <p>Tu Mensaje</p>
        <div class="inputAsistencia">
            <div class="inputAsistencia1check">
            </div>
            <div class="inputAsistencia1">
                <textarea class="inputAsistencia2" name="mensaje" id="mensaje" rows="4" cols="50" maxlength="300"></textarea>
                <div class="counter" id="contadorCaracteres"></div>
            </div>
        </div>
    </div>

    <hr>

    <button type="submit" class="enviar">Enviar</button>
</form>
            </div>
          </div>
        </div>



        <br>
        <div class="container">
          <div class="image-container">
            <img src=<?php echo $imagen2 ?> alt="Imagen 1" class="image left ">
          </div>
        </div>
        <br>
        <div class="container-2">
          <div class="image-container-2">
            <img src="img/fondo24.png" alt="Imagen 2" class="image-2">
            <p class="image-caption"><?php echo $fraseParaCanciones; ?> <br> <img src="img/play.png" width="50px" alt=""></p>

          </div>
        </div>

        <br>



        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h5 class="collapsedh5"> Elegir La Musica </h5>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form action="grabarMusica.php" method="get">

                <div class="inputAsistencia">

                  <div class="inputAsistencia1">
                    <p>Nombre</p>
                    <input class="inputAsistencia2" type="text" name="nombreInvitado" id="">
                  </div>
                  <div class="inputAsistencia1">
                    <p>Apellido</p>
                    <input class="inputAsistencia2" type="text" name="apellidoInvitado" id="">
                  </div>
                </div>

                <hr>
                <div class="inputAsistencia">

                  <div class="inputAsistencia1">
                    <p>Cantante</p>
                    <input class="inputAsistencia2" type="text" name="nombrePideMusica" id="">
                  </div>
                  <div class="inputAsistencia1">
                    <p>Canción</p>
                    <input class="inputAsistencia2" type="text" name="cancion" id="">
                  </div>
                </div>
                <hr>
                <button type="submit" class="enviar">Enviar</button>
              </form>
              <div class="verListaInvitados">
                <a href="canciones.php"> Ver Canciones</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>
      <div class="container">
        <div class="image-container">
          <img src=<?php echo $imagen3 ?> alt="Imagen 1" class="image right ">
        </div>
      </div>
      <br>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <h5 class="collapsedh5-2">&nbsp; Como Llegar </h5>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <br>
        <div class="container">
          <div class="image-container">
            <img src=<?php echo $imagen4 ?> alt="Imagen 1" class="image left ">
          </div>
        </div>
        <br>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <h5 class="collapsedh5-2">&nbsp; Regalo </h5>
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <div class="accordion-body1"> 
              <img class="imagenRegalo" src="img/heart.png" width="100px" alt="">
              <img class="imagenRegalo" src="img/piggy-bank.png" width="100px" alt="">
              </div>
              <p class="mensajeParaRegalo"><?php echo $fraseParaRegalo; ?></p>
            </div>
          </div>
        </div>

      </div>



      <footer class="footer">

      <a href="">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="rgba(16, 16, 119, 0.6)" class="bi bi-gift-fill" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z" />
          </svg></div></a>

          <a href="">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="rgba(16, 16, 119, 0.6)" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
          </svg></div></a>

          <a href="">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="rgba(16, 16, 119, 0.6)" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
          </svg></div></a>

          <a href="">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="rgba(16, 16, 119, 0.6)" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15m0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
          </svg></div></a>

         

          <a href="">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="rgba(16, 16, 119, 0.6)" class="bi bi-music-note-list" viewBox="0 0 16 16">
  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2"/>
  <path fill-rule="evenodd" d="M12 3v10h-1V3z"/>
  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z"/>
  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5"/>
</svg></div></a>

          
      </footer>
      <div class="nuestrosServicios">
        <a href="nosotros.html">Nuestros Servicios <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
          </svg></a>
      </div>
    </div>

  </div>



  <script src="script.js"> </script>
  <!-- <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/hamburger-menu.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const images = document.querySelectorAll('.image');

      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // El porcentaje de la imagen que debe estar en el viewport para activar la transición
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      images.forEach(image => {
        observer.observe(image);
      });
    });




    // Seleccionar todos los contenedores que se observarán
    const containers = document.querySelectorAll('.container-2');

    // Opciones para el IntersectionObserver
    const options = {
      root: null, // Usar el viewport como el contenedor de referencia
      threshold: 0.33 // La frase se mostrará cuando al menos el 70% del contenedor esté visible
    };

    // Crear el IntersectionObserver
    const observer = new IntersectionObserver(entries => {
      // entries es un array de objetos de observación
      entries.forEach(entry => {
        // Verificar si el contenedor está en la ventana de visualización
        if (entry.isIntersecting) {
          entry.target.querySelector('.image-caption').classList.add('show');
        } else {
          entry.target.querySelector('.image-caption').classList.remove('show');
        }
      });
    }, options);

    // Observar todos los contenedores
    containers.forEach(container => observer.observe(container));




       // Función para contar caracteres y limitar a 300
       document.addEventListener('DOMContentLoaded', function() {
        var textarea = document.getElementById('mensaje');
        var contador = document.getElementById('contadorCaracteres');

        textarea.addEventListener('input', function() {
            var longitud = textarea.value.length;
            contador.textContent ="Total:" + longitud + ' /Maximo:300';

            // Limitar a 300 caracteres
            if (longitud > 300) {
                textarea.value = textarea.value.slice(0, 300);
                contador.textContent = '300 / 300';
            }
        });
    });
  </script>
</body>

</html>