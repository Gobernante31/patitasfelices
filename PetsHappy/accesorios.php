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



  <div class="container-products-accesorios">

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/PELUCHE.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Dona</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$17.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/juguete.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Juguete con ventosa</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$30.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/TUNEL.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Tunel</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$55.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/RATON.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Raton</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$40.000</h2>

      </div>
    </div>

  </div>

  <div class="container-products-accesorios">

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/GOMA DE DIENTES.jpeg.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Hueso de goma</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$10.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/PELOTA VOLADORA.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Pelota voladora</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$60.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/PELOTAS.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Pelota de lana</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$25.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/DISPENSADOR.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Dispensador</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$50.000</h2>

      </div>
    </div>

  </div>

  <div class="container-products-accesorios">

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/GIMNASIO.jpeg.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Gimnasio</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$185.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/CUERDA.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Cuerda</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$30.000</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/frisbee.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Fresbee</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$25.500</h2>

      </div>
    </div>

    <div class="card-product-accesorios">
      <div class="container-img-accesorios">
        <img src="./img/pez electrico.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-accesorios">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Pez electronico</h3>
        <span class="add-cart">
          <i class="fa-solid fa-wand-sparkles"></i>
        </span>
        <h2 class="price">$65.000</h2>

      </div>
    </div>

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



  <script src="https://kit.fontawesome.com/56feac8295.js" crossorigin="anonymous">
  </script>




</body>

</html>