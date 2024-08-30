<?php
session_start();

if (empty($_SESSION['UserID'])) {
  header("Location: ./login.php");
}


require_once './lib/funciones.php';
require_once './php/controlador_perfil.php';
require_once './lib/header.php';

$usuarioInfo = obtenerInformacionUsuario($conn, $userID);
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

  <section class="edit-profile-container">
    <div class="profile-header">
      <h1>Editar Perfil</h1>
      <h2>
        <?php
        require_once './php/controlador_editarperfil.php';
        ?>
      </h2>
    </div>

    <form action="" method="post" class="edit-form" onsubmit="return validarFormulario()">
      <label for="username">Nombre de Usuario:</label>
      <input type="text" id="username" name="username" maxlength="20" placeholder="<?php echo $usuarioInfo['Username']; ?>">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" maxlength="150" placeholder="<?php echo $usuarioInfo['Email']; ?>">

      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" maxlength="100" placeholder="<?php echo $usuarioInfo['Nombres']; ?>">

      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" maxlength="100" placeholder="<?php echo $usuarioInfo['Apellidos']; ?>">

      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" min="10" max="90" step="1" placeholder="<?php echo $usuarioInfo['Edad']; ?>">

      <label for="cedula">Cédula:</label>
      <input type="text" id="cedula" name="cedula" maxlength="10" placeholder="<?php echo $usuarioInfo['Cedula']; ?>">

      <label for="ciudad">Ciudad:</label>
      <input type="text" id="ciudad" name="ciudad" maxlength="50" placeholder="<?php echo $usuarioInfo['Ciudad']; ?>">

      <div class="button_editporfile">
        <button type="submit" class="save-profile-btn">Guardar Cambios</button>
    </form>
    <form action="eliminar_cuenta.php" method="post" class="delete-account-form" onsubmit="return confirmarEliminarCuenta()">
      <button type="submit" class="delete-account-btn">Eliminar Cuenta</button>
    </form>
    </div>
  </section>

  <!-- Agregar el botón para eliminar cuenta -->


  <!-- Agregar overlay y confirmation-popup -->
  <div class="overlay" onclick="cancelarEliminarCuenta()"></div>
  <div class="confirmation-popup">
    <p>¿Estás seguro de que deseas eliminar tu cuenta?</p>
    <button onclick="eliminarCuenta()">Sí, estoy seguro</button>
    <button onclick="cancelarEliminarCuenta()">Cancelar</button>
  </div>

  </section>

  <script>
    function confirmarEliminarCuenta() {
      var overlay = document.querySelector('.overlay');
      var confirmationPopup = document.querySelector('.confirmation-popup');

      // Mostrar overlay y confirmation-popup
      overlay.style.display = 'block';
      confirmationPopup.style.display = 'block';

      return false; // Evitar que el formulario se envíe automáticamente
    }

    function eliminarCuenta() {
      // Enviar una solicitud POST al controlador para eliminar la cuenta
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "/php/eliminar_cuenta.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        if (xhr.status == 200) {
          // Agrega aquí cualquier otra lógica necesaria después de eliminar la cuenta
          cancelarEliminarCuenta(); // Cerrar la ventana emergente después de eliminar la cuenta
          window.location.href = "index.html"; // Redirigir al index
        }
      };
      xhr.send("eliminar_cuenta=true"); // Envia el parámetro para indicar que se debe eliminar la cuenta
    }



    function cancelarEliminarCuenta() {
      var overlay = document.querySelector('.overlay');
      var confirmationPopup = document.querySelector('.confirmation-popup');

      // Ocultar overlay y confirmation-popup
      overlay.style.display = 'none';
      confirmationPopup.style.display = 'none';

      return false; // Evitar que el formulario se envíe automáticamente
    }
  </script>


  <main in class="main-content">
    <section class="gallery">

      <img src="./img/perro enojado.jpeg" alt="Gallery Img1" class="gallery-img-1">
      <img src="./img/pero y gato juntos.jpeg" alt="Gallery Img2" class="gallery-img-2">
      <img src="./img/Selfie Puppies.jpeg" alt="Gallery Img3" class="gallery-img-3">
      <img src="./img/perro pequeño.jpeg" alt="Gallery Img4" class="gallery-img-4">
      <img src="./img/gato angora.jpeg" alt="Gallery Img5" class="gallery-img-5">



    </section>

    <section>
      <div class="logos-red">
        <h2>Redes Sociales</h2>
        <img src="./img/instagram.png" alt=""> <br><br>
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