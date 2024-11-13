<?php
$servername = "localhost";  // Si estás usando XAMPP, deja "localhost"
$username = "root";         // En XAMPP, el usuario predeterminado es "root"
$password = "";             // En XAMPP, la contraseña es normalmente una cadena vacía
$database = "mi_sitio_web."; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
