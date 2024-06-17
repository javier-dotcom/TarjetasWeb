<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Evento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="h2CrearEvento">Crear Nuevo Evento</h2>
    <form action="crear_evento.php" method="post" enctype="multipart/form-data">
        <div class="formCrearEvento">
            <div class="formCrearEvento1">
                <label for="nombre_cumpleanera">Nombre de la Cumpleañera:</label>
                <input type="text" id="nombre_cumpleanera" name="nombre_cumpleanera" required><br><br>

                <label for="fecha_evento">Fecha del Evento:</label>
                <input type="date" id="fecha_evento" name="fecha_evento" required><br><br>

                <label for="hora_evento">Hora del Evento:</label>
                <input type="time" id="hora_evento" name="hora_evento" required><br><br>

                <label for="lugar_evento">Lugar del Evento:</label>
                <input type="text" id="lugar_evento" name="lugar_evento" required><br><br>

                <label for="direccion_evento">Dirección del Evento:</label>
                <input type="text" id="direccion_evento" name="direccion_evento" required><br><br>

                <label for="imagen_cumpleanera1">Imagen 1 de la Cumpleañera:</label>
                <input type="url" id="imagen_cumpleanera1" name="imagen_cumpleanera1" required><br><br>

                <label for="imagen_cumpleanera2">Imagen 2 de la Cumpleañera:</label>
                <input type="url" id="imagen_cumpleanera2" name="imagen_cumpleanera2" required><br><br>
            </div>
            <div class="formCrearEvento1">
                <label for="imagen_cumpleanera3">Imagen 3 de la Cumpleañera:</label>
                <input type="url" id="imagen_cumpleanera3" name="imagen_cumpleanera3" required><br><br>

                <label for="imagen_cumpleanera4">Imagen 4 de la Cumpleañera:</label>
                <input type="url" id="imagen_cumpleanera4" name="imagen_cumpleanera4" required><br><br>

                <label for="imagen_cumpleanera5">Imagen 5 de la Cumpleañera:</label>
                <input type="url" id="imagen_cumpleanera5" name="imagen_cumpleanera5" required><br><br>

                <label for="fondo">Fondo del Evento:</label>
                <input type="text" id="fondo" name="fondo" required><br><br>

                <label for="id_frase_para_asistencia">ID de la Frase para Asistencia:</label>
                <select id="id_frase_para_asistencia" name="id_frase_para_asistencia" required>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br><br>
                       
                <label for="id_frase_para_canciones">ID de la Frase para Canciones:</label>
                <select id="id_frase_para_canciones" name="id_frase_para_canciones" required>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br><br>

                <label for="id_frase_para_mensaje">ID de la Frase para Mensaje:</label>
                <select id="id_frase_para_mensaje" name="id_frase_para_mensaje" required>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br><br>

                <label for="id_frase_para_regalo">ID de la Frase para Regalo:</label>
                <select id="id_frase_para_regalo" name="id_frase_para_regalo" required>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br><br>


                <label for="id_dress_code">ID Dress Code:</label>
                <select id="id_dress_code" name="id_dress_code" required>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br><br>





            </div>
        </div>
        <h4 class="submitCrearEvento"><input  type="submit" value="Crear Evento"></h4>
    </form>
</body>
</html>
