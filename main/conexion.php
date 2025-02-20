<?php

// Datos de conexión a la base de datos
$host = "localhost"; // O la dirección del servidor de tu base de datos
$usuario = "root"; // Tu nombre de usuario de la base de datos
$password = ""; // Tu contraseña de la base de datos
$database = "libreta"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $usuario, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// La conexión se ha establecido correctamente
echo "Conexión exitosa a la base de datos.";

// Puedes realizar consultas a la base de datos aquí

// Cerrar la conexión al finalizar
//$conn->close();

?>