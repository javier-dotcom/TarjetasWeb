<?php
// Iniciar la sesión si aún no está iniciada (si estás utilizando sesiones en tu aplicación)
session_start();
// Incluir el archivo de conexión
include 'conectar.php'; // Asegúrate de que este archivo tenga la conexión a la base de datos

// Obtener los datos del formulario
$nombreInvitado = $_GET['nombreInvitado'];
$apellidoInvitado = $_GET['apellidoInvitado'];
$nombrePideMusica = $_GET['nombrePideMusica'];
$cancion = $_GET['cancion'];

// Ejemplo de cómo obtener el id_evento de la sesión
$id_evento = $_SESSION['id_evento']; // Asegúrate de que $_SESSION['id_evento'] esté configurado correctamente en otra parte de tu aplicación

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO temas_musicales (nombre_solicitante, nombre_cancion, cantante, id_evento) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssi", $nombreInvitado, $cancion, $nombrePideMusica, $id_evento);

if ($stmt->execute()) {
    echo "Tema musical registrado correctamente";
} else {
    echo "Error al registrar el tema musical: " . $stmt->error;
}

// Cerrar la conexión y el statement
$stmt->close();
$conexion->close();
?>
