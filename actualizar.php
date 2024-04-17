<?php
include_once('conexion.php');

// Verificar si se recibió un ID de lista para actualizar
if(isset($_POST['id_lista'])) {
    // Obtener el ID de lista desde el formulario
    $id_lista = $_POST['id_lista'];



    // Validar si se encontró el usuario
    if ($resultado->num_rows > 0) {
        // Mostrar el formulario de actualización
        $row = $resultado->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Actualizar Usuario</title>
        </head>
        <body>
            <h2>Actualizar Usuario</h2>
            <form method="POST" action="listas.php">
                <input type="hidden" name="id_lista" value="<?php echo $row['id']; ?>">
                <label for="nuevo_nombre">Nuevo Nombre:</label>
                <input type="text" name="nuevo_nombre" value="<?php echo $row['nombre']; ?>" required>
                <br>
                <label for="nuevo_apellido">Nuevo Apellido:</label>
                <input type="text" name="nuevo_apellido" value="<?php echo $row['apellido']; ?>" required>
                <br>
                <input type="submit" value="Actualizar">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "No se encontró ningún usuario con el ID proporcionado.";
    }
} else {
    echo "No se recibió un ID de lista para actualizar.";
}

$conexion->close();
?>