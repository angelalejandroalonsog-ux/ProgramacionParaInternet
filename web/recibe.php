<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP está funcionando.<br>";

echo "Método: " . $_SERVER["REQUEST_METHOD"] . "<br>";

echo "Nombre: " . $_POST["nombre"] . "<br>";
echo "Correo: " . $_POST["correo"] . "<br>";
echo "Fecha: " . $_POST["fechaN"] . "<br>";

?>