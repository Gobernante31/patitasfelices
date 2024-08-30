<?php
session_start();
error_reporting(0);

// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
  $email_ingresado = $_POST["correo"];
  $contraseña_ingresada = $_POST["contraseña"];

  // Incluir el archivo de conexión a la base de datos
  require_once 'conexion.php';

  // Consultar la base de datos para obtener el hash de contraseña
  $stmt = $conn->prepare("SELECT UserID, Username, Password FROM usuarios WHERE Email = ?");
  $stmt->bind_param("s", $email_ingresado);
  $stmt->execute();
  $stmt->bind_result($userID, $username, $hashed_password); // Corregir aquí
  $stmt->fetch();
  $stmt->close();

  if ($hashed_password && password_verify($contraseña_ingresada, $hashed_password)) {
    // Iniciar sesión y almacenar datos en variables de sesión
    $_SESSION['UserID'] = $userID;
    $_SESSION['Username'] = $username;
    header("Location: ./perfil.php");
    exit();
  } else {
    echo '<div class="mensaje_error" id="message">Credenciales incorrectas.</div>';
  }

  $conn->close();
}
?>
