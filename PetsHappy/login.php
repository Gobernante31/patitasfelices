<?php
session_start();

ini_set('error_reporting', 0);

if (isset($_SESSION['UserID'])) {
  header("Location: ./perfil.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Patitas Felices</title>
  <link rel="stylesheet" href="./css/style_registro.css">
</head>

<body>
  <header>
    <div class="cabecera-hero">
      <div class="cabecera hero">
        <div class="baner-principal">
          <img class="escudo" src="./img/logo original.jpg" alt="">
          <i class="fa-brands fa-whatsapp"></i>

          <div class="content-baner-principal">
            <span class="text">Contacto whatsapp</span>
            <span class="number">123-456-7890</span>
          </div>
        </div>

        <div class="cabecera-logo">
          <i class="fa-solid fa-paw"></i>
          <h1 class="logo"><a href="./index.html">Patitas Felices</a></h1>
        </div>

        <a href=""></a>

        <div class="cabecera-usuario">
          <h2>Resgístrate</h2>
          <a href="./registro.php">
            <i class="fa-solid fa-user"></i></a>


          <i class="fa-solid fa-basket-shopping"></i>
          <div class="cabecera-carrito-compras">
            <span class="text">Carrito</span>
            <span class="number">(0)</span>
          </div>
        </div>
      </div>
    </div>


    <body>
      <div class="principal">
        <div class="contenedor-formularios">

          <section class="Formulario post">
            <form action="" method="POST">
              <div class="encabesado">
                <img src="./img/logo original.jpg" alt="">
                <h2>INICIAR SESION </h2>
              </div>
              <br>
              <br>
              <h3>
                <?php
                require_once './php/controlador_login.php';
                ?>
              </h3>


              <div>
                <br>
                <br>
                <label for=""></label>
                <input class="input" type="text" name="correo" id="correo" placeholder="Ingrese su correo">
                <br>
                <br>
                <label for=""></label>
                <input class="input" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
                <br>
                <br>
              </div>

              <input class="boton" type="submit" name="enviar">

            </form>
          </section>
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