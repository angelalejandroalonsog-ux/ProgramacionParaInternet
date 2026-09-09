<?php

$ruta = 'C:\programación\PPI\web/recibe.php';

echo "Ruta: $ruta<br><br>";

echo "file_exists(): ";
var_dump(file_exists($ruta));

echo "<br>is_readable(): ";
var_dump(is_readable($ruta));

echo "<br>realpath(): ";
var_dump(realpath($ruta));

?>