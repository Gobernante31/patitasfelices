<?php
require_once 'conexion.php';

// Verificar si las contraseñas coinciden
function passwordsCoinciden($contrasena, $confirmacion)
{
  return $contrasena === $confirmacion;
}

// Verificar si un usuario existe por su ID
function existeUsuario($conn, $userID)
{
  $query = "SELECT COUNT(*) FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();

  return $count > 0;
}

// Verificar si un usuario existe por su nombre de usuario
function usuarioExiste($conn, $usuario)
{
  $sql = "SELECT * FROM usuarios WHERE Username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $usuario);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();

  return $result->num_rows > 0;
}

// Verificar si un correo electrónico existe en la base de datos
function correoExiste($conn, $email)
{
  $sql = "SELECT * FROM usuarios WHERE Email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();

  return $result->num_rows > 0;
}

// Función para obtener información de un usuario por su ID
function obtenerInformacionUsuario($conn, $userID)
{
  $sql = "SELECT UserID, PrivilegioID, Username, Email, Nombres, Apellidos, Edad, Cedula, Ciudad FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuarioInfo = $result->fetch_assoc();
  $stmt->close();

  return $usuarioInfo;
}

// Función para actualizar el nombre de usuario
function actualizarUsername($conn, $userID, $username)
{
  $sql = "UPDATE usuarios SET Username = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $username, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar el correo electrónico
function actualizarEmail($conn, $userID, $email)
{
  $sql = "UPDATE usuarios SET Email = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $email, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar los nombres
function actualizarNombres($conn, $userID, $nombres)
{
  $sql = "UPDATE usuarios SET Nombres = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $nombres, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar los apellidos
function actualizarApellidos($conn, $userID, $apellidos)
{
  $sql = "UPDATE usuarios SET Apellidos = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $apellidos, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar la edad
function actualizarEdad($conn, $userID, $edad)
{
  $sql = "UPDATE usuarios SET Edad = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $edad, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar la cédula
function actualizarCedula($conn, $userID, $cedula)
{
  $sql = "UPDATE usuarios SET Cedula = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $cedula, $userID);
  $stmt->execute();
  $stmt->close();
}

// Función para actualizar la ciudad
function actualizarCiudad($conn, $userID, $ciudad)
{
  $sql = "UPDATE usuarios SET Ciudad = ? WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $ciudad, $userID);
  $stmt->execute();
  $stmt->close();
}


// Función para eliminar una cita
function eliminarCita($conn, $citaID)
{
  if (!$conn || empty($citaID)) {
    return false;
  }
  $query = "DELETE FROM agendarcitas WHERE CitaID = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "i", $citaID);
  $result = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  return $result;
}


// Obtener citas disponibles
function obtenerCitasDisponibles($conn)
{
  $sql = "SELECT CitaID, FechaHoraDisponible, Nombres, Apellidos, Precio FROM agendarcitas JOIN usuarios ON AgendarCitas.UserID  = Usuarios.UserID WHERE AgendarCitas.Estado = 0";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    return $result->fetch_all(MYSQLI_ASSOC);
  } else {
    return array();
  }
}

// Formatear fecha
function formatearFecha($fecha)
{
  setlocale(LC_TIME, 'es_ES.utf8', 'es_ES', 'es');
  $dias_semana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
  setlocale(LC_TIME, 'es_ES.utf8');
  $nombre_dia = $dias_semana[date('w', strtotime($fecha))];
  return strftime($nombre_dia . ', %e de %B de %Y a las %H:%M', strtotime($fecha));
  if (false === strpos(strftime('%A', strtotime('2022-01-01')), 'January')) {
    return strftime('%A, %e de %B de %Y a las %H:%M', strtotime($fecha));
  } else {
    return date('l, j \de F \de Y \a \l\a\s H:i', strtotime($fecha));
  }
}


// Agregar una cita a la base de datos
function agregarCita($conn, $fecha, $hora, $precio)
{
  session_start();
  $userID = $_SESSION['UserID'];

  $sql = "INSERT INTO AgendarCitas (UserID, FechaHoraDisponible, Precio) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("iss", $userID, $fechaHora, $precio);
    $fechaHora = $fecha . ' ' . $hora;
    $stmt->execute();
    $stmt->close();
    return true;
  }

  return false;
}

// Obtener el estado actual de citas del usuario
function obtenerEstadoCitaUsuario($conn, $userID)
{
  $sql = "SELECT Estado_cita FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $stmt->bind_result($estadoCita);
  $stmt->fetch();
  $stmt->close();

  return $estadoCita;
}

// Función para cambiar el estado de una cita
function cambiarEstadoCita($conn, $citaID, $nuevoEstado)
{
  // Verifica que el nuevo estado sea 0 o 1
  if ($nuevoEstado !== 0 && $nuevoEstado !== 1) {
    return false;
  }

  // Actualiza el estado de la cita en la base de datos
  $sql = "UPDATE AgendarCitas SET Estado = ? WHERE CitaID = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("ii", $nuevoEstado, $citaID);
    $stmt->execute();
    $stmt->close();
    return true;
  }

  return false;
}


// Obtener citas agendadas por un usuario
function obtenerCitasAgendadas($conn, $userID)
{
  $sql = "SELECT CitaID, FechaHoraDisponible, Precio, AgendadorID FROM agendarcitas WHERE UserID = ? AND Estado = 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $citasAgendadas = $result->fetch_all(MYSQLI_ASSOC);
  $stmt->close();

  return $citasAgendadas;
}

function obtenerCitasAgendadasComoAgendador($conn, $userID)
{
  $sql = "SELECT CitaID, AgendadorID, UserID, FechaHoraDisponible, Precio FROM agendarcitas WHERE AgendadorID = ? AND Estado = 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $citasAgendadas = $result->fetch_all(MYSQLI_ASSOC);
  $stmt->close();

  // Obtener información del usuario y agendador para cada cita
  foreach ($citasAgendadas as &$cita) {
    $cita['AgendadorUsername'] = ucwords(obtenerUsernamePorUserID($conn, $cita['AgendadorID']));
    $cita['UsuarioUsername'] = ucwords(obtenerUsernamePorUserID($conn, $cita['UserID']));
    $cita['UsuarioNombres'] = ucwords(obtenerNombresPorUserID($conn, $cita['UserID']));
    $cita['UsuarioApellidos'] = ucwords(obtenerApellidosPorUserID($conn, $cita['UserID']));
  }

  return $citasAgendadas;
}

// Función para obtener los nombres del usuario por su UserID
function obtenerNombresPorUserID($conn, $userID)
{
  $sql = "SELECT Nombres FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuario = $result->fetch_assoc();
  $stmt->close();

  return $usuario['Nombres'];
}

// Función para obtener los apellidos del usuario por su UserID
function obtenerApellidosPorUserID($conn, $userID)
{
  $sql = "SELECT Apellidos FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuario = $result->fetch_assoc();
  $stmt->close();

  return ucwords($usuario['Apellidos']);
}



// Obtener el Username dado un UserID
function obtenerUsernamePorUserID($conn, $userID)
{
  $sql = "SELECT Username FROM usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuario = $result->fetch_assoc();
  $stmt->close();

  return ucwords($usuario['Username']);
}

// Obtener el ID del agendador de una cita
function obtenerAgendadorIDCita($conn, $citaID)
{
  $sql = "SELECT UserID FROM agendarcitas WHERE CitaID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $citaID);
  $stmt->execute();
  $stmt->bind_result($agendadorID);
  $stmt->fetch();
  $stmt->close();

  return $agendadorID;
}

// Función para agendar una cita
function agendarCita($conn, $userID, $citaID)
{
  // Asegúrate de que la sesión esté iniciada y el usuario esté autenticado
  session_start();
  if (isset($_SESSION['UserID'])) {
    $agendadorID = $_SESSION['UserID'];

    // Verificar si el usuario puede agendar más citas
    if (puedeAgendarCitas($conn, $userID)) {
      // Cambiar el estado de la cita a 1 (cita ocupada)
      if (cambiarEstadoCita($conn, $citaID, 1)) {
        // Insertar la cita en la base de datos con AgendadorID
        if (insertarCita($conn, $citaID, $agendadorID)) {
          // Incrementar el contador de citas del usuario
          return incrementarContadorCitas($conn, $userID);
        }
      }
    }
  }

  return false;
}

// Función para insertar la información de la cita en la base de datos
function insertarCita($conn, $citaID, $agendadorID)
{
  // Verifica que la citaID y el agendadorID sean valores válidos
  if ($citaID <= 0 || $agendadorID <= 0) {
    return false;
  }

  // Actualiza el AgendadorID en la base de datos
  $sql = "UPDATE AgendarCitas SET AgendadorID = ? WHERE CitaID = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("ii", $agendadorID, $citaID);
    $stmt->execute();
    $stmt->close();
    return true;
  }

  return false;
}


// Función para verificar si el usuario puede agendar más citas
function puedeAgendarCitas($conn, $userID)
{
  // Establece el límite de citas que un usuario puede agendar
  $limiteCitas = 3;
  $contadorCitas = obtenerContadorCitas($conn, $userID);
  return $contadorCitas < $limiteCitas;
}

// Función para obtener el contador actual de citas del usuario
function obtenerContadorCitas($conn, $userID)
{
  $sql = "SELECT Estado_cita FROM Usuarios WHERE UserID = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $stmt->bind_result($contadorCitas);
    $stmt->fetch();
    $stmt->close();

    return $contadorCitas;
  }

  return false;
}

// Función para incrementar el contador de citas del usuario
function incrementarContadorCitas($conn, $userID)
{
  // Incrementa el contador de citas en la base de datos
  $sql = "UPDATE Usuarios SET Estado_cita = Estado_cita + 1 WHERE UserID = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $stmt->close();
    return true;
  }

  return false;
}

// Función para obtener las citas agendadas por un usuario con información adicional de la tabla Usuarios
function obtenerCitasAgendadasPaseador($conn, $userID)
{
  $sql = "SELECT A.CitaID, A.FechaHoraDisponible, A.Precio, U.Username, U.Nombres, U.Apellidos
          FROM agendarcitas A
          INNER JOIN usuarios U ON A.UserID = U.UserID
          WHERE A.UserID = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $citasAgendadas = $result->fetch_all(MYSQLI_ASSOC);
  $stmt->close();

  return $citasAgendadas;
}
