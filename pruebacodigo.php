<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo PHP</title>
</head>
<body>
    <h1>
    	<?php echo "Hola Mundo desde PHP"; ?>
    </h1>
    
    <p>
      <?php
      	$nombre = "diablo";
        echo "Hola $nombre <br>";
        echo "Hola " . $nombre . "<br>";
      ?>
    </p>
</body>
</html>