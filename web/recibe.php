<?php
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    #el $_SERVER contiene información sobre la petición HTTP que acaba de recibir el servidor
    /*COSAS QUE PUEDE CONTENER: 
    $_SERVER["REQUEST_METHOD"]
    $_SERVER["SERVER_NAME"]
    $_SERVER["REMOTE_ADDR"]

    Mientras que REQUEST_METHOD contiene el método HTTP utilizado para llegar al .php
    === nos sirve para comparar contenido y tipo, en este caso comparando POST y que sea un string
    
*/
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    echo "PHP está funcionando.<br>";

    echo "Método: " . $_SERVER["REQUEST_METHOD"] . "<br>";

    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Correo: " . $_POST["correo"] . "<br>";
    echo "Fecha: " . $_POST["fechaN"] . "<br>";

} else {
    echo "El Servidor Requiere metodo POST";
};

?>