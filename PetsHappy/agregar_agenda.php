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

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <link rel="stylesheet" href="./css/style_agendar.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <!-- –––––––––––––––––– HEADER –––––––––––––––––– -->
  <?php generarEncabezado($nombres, $userID, $conn); ?>
  <!-- –––––––––––––––––– FIN HEADER –––––––––––––––––– -->


  <main class="main-cabecera-gatos">
    <div class="cabecera-gatos">
      <i class="fa-solid fa-cat"></i>
      <h1 class="logo"><a href="#">Agendar Citas</a></h1>
    </div>
    <div class="slogan-perros">
      <center>
        <h1>Aqui puedes agregar una cita para pasear a tu mascota.</h1>
      </center>
    </div>
  </main>


  <section class="main-cabecera-fotografias">
    <div class="cabecera-fotografias">
      <i class="fa-solid fa-shoe-prints"></i>
      <h1 class="logo"><a href="#">Paseos</a></h1>
    </div>
    <div class="slogan-fotografias">
      <h1>° Paseo de 1 hora. $8.000</h1>
      <h1>° Paseo de 2 horas. $15.000</h1>
      <h1>° paseo 1 hora 2x1 12.000</h1>
    </div>
  </section>

  <!-- Recent Sales Start -->
  <div class="container-fluid pt-4 px-4 crearcita-container">
    <h1 class="crearcita-heading">Publicar solicitud de paseo</h1>

    <?php
    require_once './php/controlador_crearcitas.php';
    ?>

    <form action="" method="post" class="crearcita-form">
      <label for="fecha" class="crearcita-label">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required class="crearcita-input">

      <label for="hora" class="crearcita-label">Hora:</label>
      <input type="time" id="hora" name="hora" required class="crearcita-input">

      <label for="precio" class="crearcita-label">Precio:</label>
      <input type="number" id="precio" name="precio" min="0" step="any" required class="crearcita-input">

      <button type="submit" class="crearcita-button">Publicar</button>
    </form>
  </div>
  <!-- Recent Sales End -->

  <section class="main-content">
    <div class="gallery">
      <img src="./img/perro enojado.jpeg" alt="Gallery Img1" class="gallery-img-1">
      <img src="./img/pero y gato juntos.jpeg" alt="Gallery Img2" class="gallery-img-2">
      <img src="./img/Selfie Puppies.jpeg" alt="Gallery Img3" class="gallery-img-3">
      <img src="./img/perro pequeño.jpeg" alt="Gallery Img4" class="gallery-img-4">
      <img src="./img/gato angora.jpeg" alt="Gallery Img5" class="gallery-img-5">
    </div>

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
  </section>


  <script src="https://kit.fontawesome.com/56feac8295.js" crossorigin="anonymous"></script>

  <script src="js/main.js"></script>
  </script>
</body>

</html>