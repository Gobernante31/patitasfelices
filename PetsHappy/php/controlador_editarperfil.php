<?php
session_start();
require_once './lib/funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userID = isset($_SESSION['UserID']) ? $_SESSION['UserID'] : null;

  // Obtener los datos del formulario
  $username = isset($_POST['username']) ? limpiarInput($_POST['username']) : null;
  $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : null;
  $nombres = isset($_POST['nombres']) ? limpiarInput($_POST['nombres']) : null;
  $apellidos = isset($_POST['apellidos']) ? limpiarInput($_POST['apellidos']) : null;
  $edad = isset($_POST['edad']) ? filter_var($_POST['edad'], FILTER_VALIDATE_INT) : null;
  $cedula = isset($_POST['cedula']) ? limpiarInput($_POST['cedula']) : null;
  $ciudad = isset($_POST['ciudad']) ? limpiarInput($_POST['ciudad']) : null;

  // Verificar si al menos un campo tiene algún valor
  if (empty($username) && empty($email) && empty($nombres) && empty($apellidos) && empty($edad) && empty($cedula) && empty($ciudad)) {
    echo '<p class="edit-profile-error">Ningún campo tiene contenido. Debes ingresar al menos un valor para actualizar tu perfil.</p>';
  } else {
    // Validar cada campo y actualizar la información en la base de datos
    if (!empty($username)) {
      // Realizar la actualización del username
      actualizarUsername($conn, $userID, $username);
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Realizar la actualización del email
      actualizarEmail($conn, $userID, $email);
    }

    if (!empty($nombres) && preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/', $nombres)) {
      // Realizar la actualización de los nombres
      actualizarNombres($conn, $userID, $nombres);
    }

    if (!empty($apellidos) && preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/', $apellidos)) {
      // Realizar la actualización de los apellidos
      actualizarApellidos($conn, $userID, $apellidos);
    }

    if (!empty($edad) && $edad >= 10 && $edad <= 90) {
      // Realizar la actualización de la edad
      actualizarEdad($conn, $userID, $edad);
    }

    if (!empty($cedula) && preg_match('/^[0-9]+$/', $cedula) && strlen($cedula) <= 10) {
      // Realizar la actualización de la cédula
      actualizarCedula($conn, $userID, $cedula);
    }

    if (!empty($ciudad) && preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/', $ciudad)) {
      // Realizar la actualización de la ciudad
      actualizarCiudad($conn, $userID, $ciudad);
    }

    echo '<p class="edit-profile-success">Perfil actualizado exitosamente.</p>';
  }
}

// Función para limpiar el input
function limpiarInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
