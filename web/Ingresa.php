<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioPráctica</title>
    
</head>
<body>
    <h1>FormularioPráctica</h1>
    <?php
        require('miConexión.php');
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nombre = $_POST["nombre"];
            $sql = "INSERT INTO prueba (nombre)
                    VALUES ('$nombre')";
            $conn->exec($sql);

            $stmt = $conn->query("SELECT * FROM prueba");
            $prueba = $stmt->fetchALL(PDO::FETCH_ASSOC);
            foreach($prueba as $prueba){
                echo "<p>Nombre: " . $prueba['nombre'] . "</p>";
            }
        }else{
            echo "<p>No es una peiticón tipo POST.</p>";
        }
    ?>
</body>
</html>

