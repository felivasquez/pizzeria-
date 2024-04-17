<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('conexion.php');

    $sql = "SELECT id, nombre, apellido FROM usuarios";
    $resultado = $conexion->query($sql);

    // Validación para mostrar los datos
    if ($resultado->num_rows > 0) {
        // Hay información que mostrar
        while ($row = $resultado->fetch_assoc()) {
            echo "<div>";
            echo "ID: " . $row["id"] . " - Nombre Usuario: " . $row["nombre"] . " " . $row["apellido"];
            // Formulario para actualizar el nombre y el apellido
            echo "<form method='POST' action='actualizar.php'>";
            echo "<input type='hidden' name='id_lista' value='" . $row["id"] . "'>";
            echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
            // Formulario para eliminar la lista
            echo "<form method='POST' action='eliminar.php'>";
            echo "<input type='hidden' name='id_lista' value='" . $row["id"] . "'>";
            echo "<input type='submit' value='Eliminar'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Sin información ingresada aún";
    }

    $conexion->close();
    ?>
</body>
</html>