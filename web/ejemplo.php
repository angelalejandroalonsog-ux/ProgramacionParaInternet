<?php
    //Este será un código de prueba
    #btw, esto también es un comentario
    /*RECORDAR que los comentarios son iguales que en c*/
    echo "Los echo son los printf de c o cout de c++";
    echo "<br>Por lo tanto también necesitan punto y coma al final";
    echo "y las etiquetas de html tipo <br> o los <h2>headers<h2> también funcionan<br>"; 
    echo "<h1>¿Lo ves?</h1>";

    #variables
    #las variables, recuerda, las declaramos con el signo $
    echo "aquí también tenemos variables, aquí voy a crear una llamada nueva<br>";
    $nuevo = "Este texto está dentro de una variable.";
    echo "y podemos imprimirlos. <br>", $nuevo ,"de esta manera.";
    $noEsNuevo = "Esto no está dentro de nuevo, además estoy en un header1!!(no olvides los punto y coma...)";
    echo "<br>Para concatenar podemos usar los puntos ";
    echo "<br>Por ejemplo, vamos a imprimir una nueva variables:";
    echo "<br><h1>".$noEsNuevo."</h1>";



?>