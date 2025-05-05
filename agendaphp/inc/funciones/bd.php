<?php
// credenciales de la base de datos
define('DB_USUARIO', 'root');      // Usuario por defecto en XAMPP
define('DB_PASSWORD', '');         // Contraseña vacía por defecto en XAMPP
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>