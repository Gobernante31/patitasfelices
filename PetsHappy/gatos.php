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
  <div class="container-products-gatos">

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/OH MAI GAT.png" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Oh mai gat</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$31.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/PROPLAN.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Proplan</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$78.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/NURTION GATOS.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Nutrion</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$15.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/Naturalis.jpeg.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Naturalis</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$32.000 - 1kg</h2>

      </div>
    </div>

  </div>

  <div class="container-products-gatos">

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/MIRRINGO.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Mirringo</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$10.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/MEOW-MIX-ORIGINAL- CHOICE.png" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Meow mix</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$450.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/HILLS SCIENCE.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>hills Science Diet</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$14.300 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/EQUILIBRIO GATOS.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h3>Equilibrio</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$77.400 - 1kg</h2>

      </div>
    </div>

  </div>

  <div class="container-products-gatos">

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/DON KAT.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Don Kat</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$9.700 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/DALI CARNE.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Dali Carne</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$6.000 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/CHUNKY GATOS.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Chunky</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$14.800 - 1kg</h2>

      </div>
    </div>

    <div class="card-product-gatos">
      <div class="container-img-gatos">
        <img src="./img/BANCAT.jpg" height="250" alt="NUTRE CAN">

      </div>
      <div class="content-card-product-gatos">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>Bancat</h3>
        <span class="add-cart">
          <i class="fa-solid fa-fish"></i>
        </span>
        <h2 class="price">$3.500 - 1kg</h2>

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
  </main>


  <script src="https://kit.fontawesome.com/56feac8295.js" crossorigin="anonymous">
  </script>




</body>

</html>