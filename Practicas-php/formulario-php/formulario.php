<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    
    <form action="recibe_formulario.php" method="POST">
        <label for="firstname">Nombre:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Apellido:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>