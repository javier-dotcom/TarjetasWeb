<?php
function extractGoogleDriveId($url) {
    if (preg_match('/\/file\/d\/([^\/]+)\//', $url, $matches)) {
        return $matches[1];
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establecer la conexión con la base de datos
    $conexion = new mysqli("localhost", "root", "", "cumple15");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Extraer los IDs de las URLs de las imágenes
    $imagen1_id = extractGoogleDriveId($_POST['imagen_cumpleanera1']);
    $imagen2_id = extractGoogleDriveId($_POST['imagen_cumpleanera2']);
    $imagen3_id = extractGoogleDriveId($_POST['imagen_cumpleanera3']);
    $imagen4_id = extractGoogleDriveId($_POST['imagen_cumpleanera4']);
    $imagen5_id = extractGoogleDriveId($_POST['imagen_cumpleanera5']);

    // Crear las URLs de miniatura
    $imagen1 = "https://drive.google.com/thumbnail?id=" . $imagen1_id;
    $imagen2 = "https://drive.google.com/thumbnail?id=" . $imagen2_id;
    $imagen3 = "https://drive.google.com/thumbnail?id=" . $imagen3_id;
    $imagen4 = "https://drive.google.com/thumbnail?id=" . $imagen4_id;
    $imagen5 = "https://drive.google.com/thumbnail?id=" . $imagen5_id;

    // Preparar la consulta SQL para insertar un nuevo evento
    $sql = "INSERT INTO `eventos`(`nombre_cumpleanera`, `fecha_evento`, `hora_evento`, `lugar_evento`, `direccion_evento`, `imagen_cumpleanera1`, `imagen_cumpleanera2`, `imagen_cumpleanera3`, `imagen_cumpleanera4`, `imagen_cumpleanera5`, `fondo`, `id_frase_para_asistencia`, `id_frase_para_canciones`, `id_frase_para_mensaje`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conexion->error);
    }

    // Vincular parámetros
    $stmt->bind_param("ssssssssssssss", 
        $_POST['nombre_cumpleanera'], 
        $_POST['fecha_evento'], 
        $_POST['hora_evento'], 
        $_POST['lugar_evento'], 
        $_POST['direccion_evento'], 
        $imagen1, 
        $imagen2, 
        $imagen3, 
        $imagen4, 
        $imagen5, 
        $_POST['fondo'], 
        $_POST['id_frase_para_asistencia'], 
        $_POST['id_frase_para_canciones'], 
        $_POST['id_frase_para_mensaje']
    );

    // Ejecutar la consulta
    $stmt->execute();

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();

    // Redireccionar a la página de confirmación
    header("Location: evento_creado.php");
    exit();
}
?>
