<?php
// Iniciar la sesión si aún no está iniciada (si estás utilizando sesiones en tu aplicación)
session_start();

// Incluir el archivo de conexión
include 'conectar.php'; // Asegúrate de que este archivo tenga la conexión a la base de datos

// Obtener los datos del formulario
$nombreInvitado = $_GET['nombreInvitado'];
$apellidoInvitado = $_GET['apellidoInvitado'];
$mensaje = $_GET['mensaje'];

// Ejemplo de cómo obtener el id_evento de la sesión
$id_evento = $_SESSION['id_evento']; // Asegúrate de que $_SESSION['id_evento'] esté configurado correctamente en otra parte de tu aplicación

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO mensajes (texto, nombre, apellido, id_evento) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssi", $mensaje, $nombreInvitado, $apellidoInvitado, $id_evento);

if ($stmt->execute()) {
    echo "Mensaje registrado correctamente";
} else {
    echo "Error al registrar el mensaje: " . $stmt->error;
}

// Cerrar la conexión y el statement
$stmt->close();
$conexion->close();
?>
