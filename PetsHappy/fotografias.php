<?php
session_start();

if (empty($_SESSION['UserID'])) {
  header("Location: ./login.php");
}


require_once './lib/funciones.php';
require_once './lib/header.php';
require_once './php/controlador_perfil.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Patitas Felices</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <!-- –––––––––––––––––– HEADER –––––––––––––––––– -->
  <?php generarEncabezado($nombres, $userID, $conn); ?>
  <!-- –––––––––––––––––– FIN HEADER –––––––––––––––––– -->

  <section class="gallery">

    <img src="./img/amarillo gafas.jpeg" alt="Gallery Img1" class="gallery-img-1">
    <img src="./img/naranja.jpeg" alt="Gallery Img2" class="gallery-img-2">
    <img src="./img/risa.jpeg" alt="Gallery Img3" class="gallery-img-3">
    <img src="./img/dalmata.jpeg" alt="Gallery Img4" class="gallery-img-4">
    <img src="./img/perro cafe.jpeg" alt="Gallery Img5" class="gallery-img-5">



  </section>

  <section class="gallery">

    <img src="./img/gato 1.jpeg" alt="Gallery Img1" class="gallery-img-1">
    <img src="./img/gato 2.jpeg" alt="Gallery Img2" class="gallery-img-2">
    <img src="./img/gato 5.jpeg" alt="Gallery Img3" class="gallery-img-3">
    <img src="./img/gato 4.jpeg" alt="Gallery Img4" class="gallery-img-4">
    <img src="./img/gato 3.jpeg" alt="Gallery Img5" class="gallery-img-5">



  </section>

  <main class="main-cabecera-fotografias">
    <div class="cabecera-fotografias">
      <i class="fa-solid fa-camera"></i>
      <h1 class="logo"><a href="Fotografias.html">Paquetes de fotografias</a></h1>
    </div>
    <div class="slogan-fotografias">
      <h1>° 10 Fotografías digitales en alta resolución. $220.000</h1>
      <h1>° 5 Fotografías digitales en alta resolución. $130.000</h1>
      <h1>° 3 Fotografías digitales en alta resolución. $90.000</h1>
      <h1>° 1 Fotografía digital en alta resolución. $40.000</h1>
    </div>
  </main>

  <section>
    <div class="logos-red">
      <h2>Redes Sociales</h2>
      <img src="./img/instagram.png" alt="">
      <img src="./img/facebook.png" alt="">
    </div>
  </section>
  <br>
  <footer class="derechos-autor">
    <p>
    <h1>&copy;derechos de autor</h1>
    </p>
  </footer>
  </main>


  <script src="https://kit.fontawesome.com/56feac8295.js" crossorigin="anonymous">
  </script>




</body>

</html>