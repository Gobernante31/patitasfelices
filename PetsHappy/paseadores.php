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

  <div class="container-products-paseadores">

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador 1.jpeg" height="250" alt="NUTRE CAN">

      </div>

      <div class="content-card-product-paseadores">
        <i class="fa-solid fa-person"></i><br><br>
        <h3>Mateo Diaz</h3>
      </div>
    </div>

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador 2.jpeg" height="250" alt="NUTRE CAN">

      </div>

      <div class="content-card-product-paseadores">
        <i class="fa-solid fa-person-dress"></i><br><br>
        <h3>Maria Cano</h3>
      </div>
    </div>

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador 3.jpeg" height="250" alt="NUTRE CAN">
      </div>
      <div class="content-card-product-paseadores">
        <i class="fa-solid fa-person"></i><br><br>
        <h3>Fico Perez</h3>
      </div>
    </div>

  </div>

  <div class="container-products-paseadores">

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador4.jpeg" height="250" alt="NUTRE CAN">

      </div>

      <div class="content-card-product-paseadores">

        <i class="fa-solid fa-person"></i><br><br>
        <h3>Sara Ruiz</h3>
      </div>
    </div>

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador 5.jpeg" height="250" alt="NUTRE CAN">

      </div>

      <div class="content-card-product-paseadores">

        <i class="fa-solid fa-person"></i><br><br>
        <h3>Juan Ruiz</h3>
      </div>
    </div>

    <div class="card-product-paseadores">
      <div class="container-img-paseadores">
        <img src="./img/paseador6.jpeg" height="250" alt="NUTRE CAN">

      </div>

      <div class="content-card-product-paseadores">

        <i class="fa-solid fa-person"></i><br><br>
        <h3>Luis Torres</h3>
      </div>
    </div>



  </div>

  <main class="main-cabecera-fotografias">
    <div class="cabecera-fotografias">
      <i class="fa-solid fa-shoe-prints"></i>
      <h1 class="logo"><a href="Fotografias.html">Paseos</a></h1>
    </div>
    <div class="slogan-fotografias">
      <h1>° Paseo de 1 hora. $8.000</h1>
      <h1>° Paseo de 2 horas. $15.000</h1>
      <h1>° Cuidar tu mascota 8 horas. 65.000</h1>
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