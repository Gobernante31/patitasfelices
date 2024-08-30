<?php
session_start();
require_once './lib/funciones.php';

// Verificar si se ha enviado el formulario y si la variable 'citaID' está definida
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['citaID'])) {
  $citaID = $_POST['citaID'];
  $userID = isset($_SESSION['UserID']) ? $_SESSION['UserID'] : null;

  // Verificar si las ID Coinciden, para no agendar la misma cita del mismo User
  $agendadorID = obtenerAgendadorIDCita($conn, $citaID);

  if ($agendadorID === $userID) {
    // El usuario está intentando agendar su propia cita
    echo '<p class="crearcita-error">No puedes agendar tu propia cita.</p>';
  } else {
    // Verificar si el usuario puede agendar más citas
    if (puedeAgendarCitas($conn, $userID)) {
      // Intentar agendar la cita
      $exito = agendarCita($conn, $userID, $citaID);
      if ($exito) {
        echo '<p class="crearcita-success">Cita agendada exitosamente.</p>';
      } else {
        echo '<p class="crearcita-error">Hubo un error al agendar la cita.</p>';
      }
    } else {
      echo '<p class="crearcita-error">Has alcanzado el límite de citas.</p>';
    }
  }
}
