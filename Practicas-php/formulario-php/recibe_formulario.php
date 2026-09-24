<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username   = "root";     // Usuario por defecto en Laragon/XAMPP
$password   = "";         // Contraseña por defecto (vacía en Laragon)
$database   = "mi_base_de_datos"; // Reemplaza con el nombre de tu base de datos

try {
    // 1. Establecer conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. Recepción de datos del formulario mediante $_POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];

        // 3. Preparación de la sentencia SQL para insertar los datos
        $sql = "INSERT INTO usuarios (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
        $stmt = $conn->prepare($sql);

        // Vincular parámetros para mayor seguridad
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);

        // Ejecutar inserción
        $stmt->execute();

        echo "¡Datos insertados correctamente en la base de datos!";
    }
} catch (PDOException $e) {
    echo "Error en la conexión o inserción: " . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>