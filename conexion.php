<?php
$servername = "localhost";
$username = "root"; // Tu nombre de usuario de MySQL
$password = ""; // Tu contraseña de MySQL (si tienes una)
$dbname = "billar_app"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para obtener productos
function obtenerProductos() {
    global $conn;
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    $productos = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }

    return $productos;
}
?>
