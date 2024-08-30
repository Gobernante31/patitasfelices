<?php
session_start(); // Inicia la sesión
error_reporting(0);

require_once 'conexion.php';
require_once './lib/funciones.php';

// Mensajes de error
$mensajeError = "";
$mensajeExito = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recibir datos del formulario
  $username = $_POST['usuario'];
  $email = $_POST['correo'];
  $password = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
  $confirmarPassword = $_POST['confirmar_contraseña'];
  $nombres = $_POST['nombre'];
  $apellidos = $_POST['apellido'];
  $edad = $_POST['edad'];
  $cedula = $_POST['cedula'];
  $ciudad = $_POST['ciudad'];

  // Verificar si las contraseñas coinciden
  if (!passwordsCoinciden($_POST['contraseña'], $_POST['confirmar_contraseña'])) {
    $mensajeError = "Las contraseñas no coinciden";
  } else {
    // Verificar si ya existe un usuario con el mismo nombre
    if (usuarioExiste($conn, $username)) {
      $mensajeError = "Ya existe un usuario con ese nombre";
    }
    // Verificar si ya existe un usuario con el mismo correo
    elseif (correoExiste($conn, $email)) {
      $mensajeError = "Ya existe un usuario con ese correo";
    } else {
      // Preparar la consulta SQL de inserción
      $sql = "INSERT INTO usuarios (Username, Email, Password, Nombres, Apellidos, Edad, Cedula, Ciudad, PrivilegioID)
              VALUES ('$username', '$email', '$password', '$nombres', '$apellidos', '$edad', '$cedula', '$ciudad', 2)";

      // Ejecutar la consulta
      if ($conn->query($sql) === TRUE) {
        // Crear sesión para el usuario registrado
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        // Redirigir a perfil.php después del registro exitoso
        header("Location: perfil.php");
        exit();
      }
    }
  }
}

if (!empty($mensajeError)) {
  echo "<p style='color: red;'>$mensajeError</p>";
}
if (!empty($mensajeExito)) {
  echo "<p style='color: green;'>$mensajeExito</p>";
}
