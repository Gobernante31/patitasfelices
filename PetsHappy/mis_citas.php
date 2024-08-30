<?php
session_start();
$userID = $_SESSION['UserID'];


if (empty($_SESSION['UserID'])) {
  header("Location: ./login.php");
}


require_once './lib/funciones.php';
require_once './php/controlador_perfil.php';
require_once './lib/header.php';

// Obtener las citas agendadas
$citasAgendadasPaseador = obtenerCitasAgendadasPaseador($conn, $_SESSION['UserID']);
// Obtener las citas agendadas por el usuario actual
$citasAgendadas = obtenerCitasAgendadas($conn, $_SESSION['UserID']);
$usuarioInfo = obtenerInformacionUsuario($conn, $_SESSION['UserID']);

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
      <h1 class="logo"><a href="#">Ver Citas</a></h1>
    </div>
    <div class="slogan-perros">
      <center>
        <h1>Aqui puedes ver tus citas.</h1>
        <h4>recuerda que no puedes cancelar tus citas</h4>
      </center>
    </div>
  </main>



  <!-- Recent Sales Start -->
  <?php
  if ($usuarioInfo['PrivilegioID'] === 2) {
  ?>
    <div class="micita-container container-fluid pt-4 px-4">
      <h1 class="micita-heading">Mis Citas Creadas</h1>
      <h2> <?php
            require_once './php/controlador_eliminarcita.php';
            ?></h2>

      <?php
      // Obtener las citas agendadas por el usuario actual como paseador
      $citasAgendadasPaseador = obtenerCitasAgendadasPaseador($conn, $_SESSION['UserID']);

      if (empty($citasAgendadasPaseador)) {
        echo '<p class="micita-error">No tienes citas creadas.</p>';
      } else {
        foreach ($citasAgendadasPaseador as $cita) {
          echo '<div class="micita-item">';
          echo '<strong class="micita-id">Cita ' . $cita['CitaID'] . '</strong>';
          echo '<p class="micita-usuario">Usuario: ' . $cita['Username'] . '</p>';
          echo '<p class="micita-nombres">Nombre: ' . $cita['Nombres'] . ' ' . $cita['Apellidos'] . '</p>';
          echo '<p class="micita-fecha">Fecha y Hora: ' . formatearFecha($cita['FechaHoraDisponible']) . '</p>';
          echo '<p class="micita-precio">Precio: $' . $cita['Precio'] . '</p>';
          echo '<form action="" method="post" class="eliminar-cita-form" onsubmit="return confirmarEliminarCita(' . $cita['CitaID'] . ')">';
          echo '<input type="hidden" name="citaID" value="' . $cita['CitaID'] . '">';
          echo '<button type="submit" class="eliminar-cita-btn">Eliminar Cita</button>';
          echo '</form>';
          echo '<hr class="micita-separator">';
          echo '</div>';
        }
      }
      ?>
    </div>
  <?php
  }
  ?>




  <?php
  // Verificar si el PrivilegioID es igual a 2 (o el valor correspondiente)
  if ($usuarioInfo['PrivilegioID'] === 1) {
  ?>
    <div class="micita-container container-fluid pt-4 px-4">
      <h1 class="micita-heading">Mis Citas Agendadas</h1>

      <?php
      // Obtener las citas agendadas por el usuario actual como agendador
      $citasAgendadas = obtenerCitasAgendadasComoAgendador($conn, $_SESSION['UserID']);

      if (empty($citasAgendadas)) {
        echo '<p class="micita-error">No tienes citas agendadas.</p>';
      } else {
        foreach ($citasAgendadas as $cita) {
          echo '<div class="micita-item">';
          echo '<strong class="micita-id">Cita ' . $cita['CitaID'] . '</strong>';
          echo '<p class="micita-fecha">Usuario: ' . $cita['UsuarioUsername'] . '</p>';
          echo '<p class="micita-nombres">Nombre: ' . $cita['UsuarioNombres'] . ' ' . $cita['UsuarioApellidos'] . '</p>';
          echo '<p class="micita-fecha">Fecha y Hora: ' . formatearFecha($cita['FechaHoraDisponible']) . '</p>';
          echo '<p class="micita-precio">Precio: $' . $cita['Precio'] . '</p>';
          echo '<hr class="micita-separator">';
          echo '</div>';
        }
      }
      ?>
    </div>
  <?php
  }
  ?>



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
</body>

</html>