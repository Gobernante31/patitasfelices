<?php
session_start();
require_once '../conexion.php';

// Función para eliminar la cuenta
function eliminarCuenta($conn, $userID)
{
  if (!$conn || empty($userID)) {
    echo 'Error: No se puede eliminar la cuenta.';
    return false;
  }

  // Preparar la consulta
  $query = "DELETE FROM usuarios WHERE UserID = ?";
  $stmt = mysqli_prepare($conn, $query);

  // Vincular parámetros
  mysqli_stmt_bind_param($stmt, "i", $userID);

  // Ejecutar la consulta
  $result = mysqli_stmt_execute($stmt);

  // Verificar el éxito de la ejecución
  if ($result) {
    // Cerrar la sesión
    cerrarSesion();
    // Redirigir al usuario al index
    header("Location: index.html");
    exit(); // Asegurar que el script se detenga después de la redirección
  } else {
    echo 'Error: No se pudo eliminar la cuenta.';
  }

  // Cerrar la declaración y la conexión
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  return $result;
}


function cerrarSesion()
{
  // Inicia la sesión si no está iniciada
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  session_unset();
  session_destroy();
  header("Location: index.html");
  exit();
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['eliminar_cuenta']) && $_POST['eliminar_cuenta'] === 'true') {
    // Obtener el ID de usuario de la sesión
    $userID = isset($_SESSION['UserID']) ? $_SESSION['UserID'] : null;

    // Aquí agregas la lógica para eliminar la cuenta en la base de datos
    // Utiliza la función correspondiente desde tu archivo de funciones

    // Ejemplo:
    if (!empty($userID)) {
      if (eliminarCuenta($conn, $userID)) {
        echo '¡Cuenta eliminada exitosamente!';
      } else {
        echo 'Error al eliminar la cuenta.';
      }
    } else {
      echo 'Error: No se puede obtener el ID de usuario.';
    }
  } else {
    echo 'Error: Parámetro incorrecto para eliminar la cuenta.';
  }
} else {
  echo 'Error: Solicitud no válida.';
}
