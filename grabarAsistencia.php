<?php
session_start();
$id=$_SESSION['id_evento'];
// Incluir el archivo de conexión
include 'conectar.php';

// Obtener los datos del formulario
$nombre = $_GET['nombreInvitado'];
$apellido = $_GET['apellidoInvitado'];
$celiaco = isset($_GET['celiaco']) && $_GET['celiaco'] === 'si' ? 1 : 0;
$vegetariano = isset($_GET['vegetariano']) && $_GET['vegetariano'] === 'si' ? 1 : 0;
$id_evento = $id; // Puedes cambiar esto o hacerlo dinámico según tus necesidades

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO asistencia (nombre, apellido, id_evento, celiaco, vegetariano) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssiii", $nombre, $apellido, $id_evento, $celiaco, $vegetariano);

if ($stmt->execute()) {
    echo "Asistencia registrada correctamente";
} else {
    echo "Error al registrar la asistencia: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
