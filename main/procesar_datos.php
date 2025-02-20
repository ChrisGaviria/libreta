<?php

// Incluir el archivo de conexión
include 'conexion.php';

// Recibir los datos enviados por AJAX
$cuenta = $_POST['cuenta'];
$valor = $_POST['valor'];

// Preparar la consulta SQL
$sql = "INSERT INTO cuentas (nombre_cuenta, valor_cuenta) VALUES ('$cuenta', '$valor')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  echo "Datos guardados correctamente.";
} else {
  echo "Error al guardar los datos: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>

