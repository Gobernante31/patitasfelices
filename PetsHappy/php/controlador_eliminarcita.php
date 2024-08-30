<?php
session_start();
require_once './lib/funciones.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['citaID'])) {
    // Obtener el ID de la cita desde el formulario
    $citaID = $_POST['citaID'];
    // Eliminar la cita
    if (eliminarCita($conn, $citaID)) {
      // Redirigir a la página de citas después de eliminar
      header("Location: mis_citas.php");
      exit();
    } else {
      echo 'Error al eliminar la cita.';
    }
  }
}
