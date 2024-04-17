<?php
    $servidor   = 'localhost';
    $usuario    = 'root';
    $contrasena = '';
    $bd = 'crud-basico';

    // se crea la conexión
    $conexion = new mysqli($servidor, $usuario, $contrasena, $bd);
    // se valida la conexión

    if ($conexion->connect_error) {
        die('Hubo un fallo en la conexión ' . $conexion->connect_error);
    };
?>
