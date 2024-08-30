<?php
// Cerrar sesión
session_start();
session_destroy();
session_unset();
header("location: ../index.html");
exit;
