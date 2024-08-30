<?php
session_start();
$userID = $_SESSION['UserID'];


if (empty($_SESSION['UserID'])) {
  header("Location: ./login.php");
}


require_once './lib/funciones.php';
require_once './php/controlador_perfil.php';
require_once './lib/header.php';
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

  <div class="container-products-perros">

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/EQUILIBRIO.png" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Equilibrio</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$26.500 - 1kg</h2>

      </div>
    </div>
    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/nutre can .jpg" height="250" alt="NUTRE CAN">
      </div>



      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Nutre Can</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$10.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/MAX.jpg" height="250" alt="NUTRE CAN">




      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Max</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$17.200 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/CHUNKY.jpg" height="250" alt="NUTRE CAN">
      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Chunky</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$8.400 - 1kg</h2>

      </div>
    </div>


  </div>

  <div class="container-products-perros">

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/NULO.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Nulo Freestyle</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$37.000 - 1kg</h2>

      </div>
    </div>
    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/NUTRION.jpg" height="250" alt="NUTRE CAN">




      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Nutrion</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$42.500 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/Q-IDA CAN.jpg" height="250" alt="NUTRE CAN">




      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Q-ida can</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$13.800 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/RINGO.jpg" height="250" alt="NUTRE CAN">
      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Ringo</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$6.400 - 1kg</h2>

      </div>
    </div>




  </div>

  <div class="container-products-perros">

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/dog chaw.jpg" height="250" alt="NUTRE CAN">



      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Dog Chaw</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$12.800 - 1kg</h2>

      </div>
    </div>
    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/HILL'S.png" height="250" alt="NUTRE CAN">




      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Hill's</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$31.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/DOGOURMET.jpg" height="250" alt="NUTRE CAN">




      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Dogourmet</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$8.300 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-perros">
      <div class="container-img-perros">
        <img src="./img/ROYAL CANIN.jpg" height="250" alt="NUTRE CAN">
      </div>
      <div class="content-card-product-perros">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Royal Canin</h3>
        <span class="add-cart">
          <i class="fa-solid fa-bone"></i>
        </span>
        <h2 class="price">$28.200 - 1kg</h2>

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