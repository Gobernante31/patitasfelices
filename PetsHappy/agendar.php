<?php
session_start();

if (empty($_SESSION['UserID'])) {
  header("Location: ./login.php");
}


require_once './lib/funciones.php';
require_once './lib/header.php';
require_once './php/controlador_perfil.php';

$citasDisponibles = obtenerCitasDisponibles($conn);
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
        <h1>Aqui puedes agendar citas para pasear a tu mascota.</h1>
        <h5>recuerda que no puedes cancelar tus citas</h5>
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
  <!-- Tu formulario HTML -->
  <form action="" method="post">
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h1 class="mb-0">Agendar Cita</h1>
        </div>
        <?php require_once './php/controlador_agendarcita.php'; ?>
        <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
              <tr class="text-white">
                <th scope="col">Fecha y Hora disponible</th>
                <th scope="col">Cliente</th>
                <th scope="col">Precio</th>
                <th scope="col">Agendar</th>
              </tr>
            </thead>
            <tbody>
              <?php if (isset($citasDisponibles) && !empty($citasDisponibles)) : ?>
                <?php foreach ($citasDisponibles as $cita) : ?>
                  <tr>
                    <td><?php echo formatearFecha($cita['FechaHoraDisponible']); ?></td>
                    <td><?php echo $cita['Nombres'] . ' ' . $cita['Apellidos']; ?></td>
                    <td>$<?php echo $cita['Precio']; ?></td>
                    <td>
                      <!-- Botón "Agendar" con valor de la CitaID -->
                      <button class="btn btn-sm btn-primary" type="submit" name="citaID" value="<?php echo $cita['CitaID']; ?>">Agendar</button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="4">No hay citas disponibles.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>


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