<?php
    //Este será un código de prueba
    #btw, esto también es un comentario
    /*RECORDAR que los comentarios son iguales que en c*/
    echo "Los echo son los printf de c o cout de c++";
    echo "<br>Por lo tanto también necesitan punto y coma al final";
    echo "y las etiquetas de html tipo br... <br> o los...<h2>headers<h2> también funcionan<br>"; 
    echo "<h1>¿Lo ves?</h1>";

    #variables
    #las variables, recuerda, las declaramos con el signo $
    echo "aquí también tenemos variables, aquí voy a crear una llamada nueva<br>";
    $nuevo = "Este texto está dentro de una variable...";
    echo "y podemos imprimirlos. <br>", $nuevo ," de esta manera.";
    $noEsNuevo = "Esto no está dentro de nuevo, además estoy en un header!!!(no olvides los punto y coma...)";
    echo "<br>Para concatenar podemos usar los puntos ";
    echo "<br>Por ejemplo, vamos a imprimir una nueva variables:";
    echo "<br><h1>".$noEsNuevo."</h1>";
    $noEsNuevo.="...Además, de esta forma, añadimos nuevo texto, con un '.=' punto igual";
    echo $noEsNuevo;
    echo "<hr>";
    #aquí añadimos por medio de get (lo escribimos desde el url del navegador "?nombre=ejemplo") y así se introduce en la nueva variable, la cual, especifica que reicbe por medio de get
    #no sólo hay variables fijas, si no que podemos recibirlas de metodos como http, url, formulario, sesión, cookie...
    #get es una variable super-global
    echo "Método _GET...<br><br>";
    /*condicionales
    if(!$nombre){
        $nombre="Nombre Por Defecto";
    }
    if(!$altura){
        $altura=186;
    }
    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
    }else{
        $nombre="Nombre por Defecto";
    }

    if(isset($_GET["altura"])){
            $altura=$_GET["altura"];
        } else{
            $altura="100";
        }
    */
    #otra forma de usar condicionales cuando introducimos valores con $_GET es con ISSET.
    #usaremos funciones
    $altura=existeParametro("altura");
    $nombre=existeParametro("nombre");

    
    
    #podemos añadir distintos valores a distintas variables. en este caso la url se vería tal que:
    # http://localhost:8000/ejemplo.php?nombre=ESTO%20ES%20UN%20NOMBRE&altura=190
    #no es necesario introducir los %20, esos se incluyen sólos al tener un espacio.
    echo "ejemplo con nombre: ",$nombre," y altura: ",$altura,"<br>"; 
    echo "ejemplo con nombre: ",$nombre," y altura: ",$altura,"<br>";
    echo "ejemplo con nombre: ",$nombre," y altura: ",$altura,"<br>";
    /*
    echo $_GET["nombre"];
    echo "<br>";
    echo $_GET["altura"];
    echo "<br>";
    */

    #pasa que, si no introducimos nada en la url, nos saltaran errores.
    #para eso usamos:
    #   Condiciones.
    /*
    if($altura>=180){
        echo "Eres alto!";
    }
    else{
        echo "no eres tan alto en realidad";
    }
    */
    # Funciones.
    function existeParametro($parametro){

        if(isset($_GET[$parametro])){
            $valor=$_GET[$parametro];
        }else{
            $valor="Valor por Defecto";
        }
        return $valor;
    }
    /*
    function compararAltura(){
        if(isset($_GET["altura"])){
            $altura=$_GET["altura"];
        } else{
            $altura="100";
        }
        return $altura;
    }
    */

    #Arrays
    $personas =["Alejandro","Daniel","María"];
    //echo $personas[2];

?>
<h1>Listado</h1>
<ul>
    <?php
    foreach($personas as $nombre){
    echo "<li>$nombre</li>";
    }
    ?>
</ul>