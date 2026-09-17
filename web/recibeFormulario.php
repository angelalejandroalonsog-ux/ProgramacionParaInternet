<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe Formulario</title>
</head>
<body>
    <h1>Recepción de formulario</h1>
    <?php
        require('conexion.php');

        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $fecha_nacimiento = $_POST["fecha_nacimiento"];

            // Limpieza de datos

            // Crear registro en DB
            $sql = "INSERT INTO persona (nombre, correo, fecha_nacimiento)
                    VALUES ('$nombre', '$correo', '$fecha_nacimiento')";
            $conn->exec($sql);


            // Mostrar información de tabla personas
            $stmt = $conn->query("SELECT * FROM persona");
            $persona = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Recorre el array de personas y muestra la información
            foreach ($persona as $persona) {
                echo "<p>Nombre: " . $persona['nombre'] . ", Correo: " . $persona['correo'] . ", Fecha de nacimiento: " . $persona['fecha_nacimiento'] . "</p>";
            }
        } else {
            echo "<p>No es una petición tipo POST.</p>";
        }
    ?>
</body>
</html>