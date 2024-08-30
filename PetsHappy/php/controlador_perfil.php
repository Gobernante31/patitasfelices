<?php
$userID = $_SESSION['UserID'];
// Establece el manejo de errores de PHP
ini_set('error_reporting', 1);

require_once 'conexion.php';
require_once './lib/funciones.php';

// Consulta la base de datos para obtener la información del perfil del usuario
$sql = "SELECT Username, Email, Edad, Nombres, Apellidos, Edad, Cedula, Ciudad FROM usuarios WHERE UserID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$stmt->bind_result($username, $email, $edad, $nombres, $apellidos,  $edad, $cedula, $cuidad);
$stmt->fetch();
$stmt->close();