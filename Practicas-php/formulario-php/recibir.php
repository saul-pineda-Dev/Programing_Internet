<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];


// 1. Sanitización

$nombre = htmlspecialchars(trim($nombre));
$correo = htmlspecialchars(trim($correo));
$fecha_nacimiento = htmlspecialchars(trim($fecha_nacimiento));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información recibida</title>
</head>

<body>

    <h2>Información recibida</h2>

    <?php

    echo "Nombre: " . $nombre . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Fecha de nacimiento: " . $fecha_nacimiento . "<br>";

    ?>

</body>
</html>