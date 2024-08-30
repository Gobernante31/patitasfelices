<?php
require_once './lib/funciones.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $precio = $_POST['precio'];

  // Llamar a la función para agregar la cita
  $exito = agregarCita($conn, $fecha, $hora, $precio);

  // Verificar si la inserción fue exitosa
  if ($exito) {
    echo '<p class="crearcita-success">Cita agregada exitosamente.</p>';
  } else {
    echo '<p class="crearcita-error">Hubo un error al agregar la cita.</p>';
  }
}