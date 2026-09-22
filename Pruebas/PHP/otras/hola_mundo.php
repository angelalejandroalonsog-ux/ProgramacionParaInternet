<?php

//echo es el printf
echo "aló \n"; 
//y también usa el \n para el salto de linea
$my_string = "Cebolla, loco, pero qué maldito teni";
echo $my_string."\n";
echo "tipo de dato: ".gettype($my_string); //esto nos indica el tipo de dato de la variable introducida.

$my_string =3; //tipado dinámico
echo "\n".$my_string."\n";
echo "tipo de dato: ".gettype($my_string);
$my_string = "esto es un string";
$my_integer = 7;
$my_integer = $my_integer + 4;
echo "\n".$my_integer;
echo "\n".$my_integer-1;
echo "\n".$my_integer;

$my_float = 21.2;
echo "\n".$my_float;
echo "\n".gettype($my_float);
//float no existe, siempre que sea decimal será un double
echo "\nsuma: ", $my_integer + $my_float . "\n";
//pero si intentamos sumar cualquier valor numerico con un string, saltará error por obvias razones.
$my_bool = true;
echo $my_bool."\n";
$my_bool = false;
//echo $my_bool."\n"; no existe un valor imprimible, pero representa un 0.
echo $my_bool==0 ."\n";
echo gettype($my_bool);
//hasta doonde yo sé, ya no es la regla el dejar el cierre de php
?>