<?php
include_once('conexion.php');

// Verificar si se recibió un ID de lista para eliminar
if(isset($_POST['id_lista'])) {
    // Obtener el ID de lista desde el formulario
    $id_lista = $_POST['id_lista'];

    // Consulta SQL para eliminar la lista con el ID proporcionado
    $sql = "DELETE FROM usuarios WHERE id = $id_lista";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Eliminación de registro exitosa";
        header("refresh:2 ;url=listas.php");
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "No se recibió un ID de lista para eliminar";
}

$conexion->close();
?>
