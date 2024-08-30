<?php
function generarEncabezado($nombres, $userID, $conn)
{
  require_once './lib/funciones.php';
  // Obtener la información del usuario
  $usuarioInfo = obtenerInformacionUsuario($conn, $_SESSION['UserID']);

  echo '<header>';
  echo '<div class="cabecera-hero">';
  echo '<div class="cabecera hero">';

  // Bloque del baner principal
  echo '<div class="baner-principal">';
  echo '<img class="escudo" src="./img/logo original.jpg" alt="">';
  echo '<i class="fa-brands fa-whatsapp"></i>';
  echo '<div class="content-baner-principal">';
  echo '<span class="text">Contacto whatsapp</span>';
  echo '<span class="number">123-456-7890</span>';
  echo '</div>';
  echo '</div>';

  // Bloque del logo
  echo '<div class="cabecera-logo">';
  echo '<i class="fa-solid fa-paw"></i>';
  echo '<h1 class="logo"><a href="./index.html">Patitas Felices</a></h1>';
  echo '</div>';

  // Bloque del usuario
  echo '<div class="cabecera-usuario">';

  // Verificar si el usuario está autenticado
  if (empty($userID)) {
    echo '<h3>Inicio de sesión</h3>';
    echo '<a href="./login.php"><i class="fa-solid fa-user"></i></a>';
    echo '<div class="cabecera-usuario">';
    echo '<h2>Regístrate</h2>';
    echo '<a href="./registro.php"><i class="fa-solid fa-user"></i></a>';
  } else {
    echo '<h2>' . $nombres . '</h2>';
    echo '<i class="fa-solid fa-user"></i>';
    echo '<a class="cerrar-sesion-btn" href="./php/controlador_logout.php">Cerrar sesión</a>';
    echo '<i class="fa-solid fa-basket-shopping"></i>';
    echo '<div class="cabecera-carrito-compras">';
    echo '<span class="text">Carrito</span>';
    echo '<span class="number">(0)</span>';
    echo '</div>';
  }

  echo '</div>';
  echo '</div>';

  // Bloque del menú de navegación
  echo '<div class="cabecera-navbar">';
  echo '<nav class="navbar cabecera">';
  echo '<ul class="menu">';
  echo '<li><a href="./index.html">Inicio</a></li>';
  echo '<li><a href="./perros.php">Perros</a></li>';
  echo '<li><a href="./perfil.php">Perfil</a></li>';
  echo '<li><a href="./gatos.php">Gatos</a></li>';
  echo '<li><a href="./Fotografias.php">Fotografias</a></li>';
  echo '<li><a href="./paseadores.php">Paseador</a></li>';
  echo '<li><a href="./accesorios.php">Accesorios</a></li>';
  echo '<li><a href="./mis_citas.php">Mis citas</a></li>';

  if ($usuarioInfo['PrivilegioID'] === 1) {
    echo '<li><a href="./agendar.php">Agendar</a></li>';
  }

  if ($usuarioInfo['PrivilegioID'] === 2) {
    echo '<li><a href="./agregar_agenda.php">Agregar Cita</a></li>';
  }

  echo '</ul>';
  echo '<form class="search-form">';
  echo '<input type="search" placeholder="Buscar..." />';
  echo '<button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>';
  echo '</form>';
  echo '</nav>';
  echo '</div>';

  echo '</header>';
}

// Luego puedes llamar a la función en tu código principal así:
// generarEncabezado($nombres, $userID);
