<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<h3><a href="https://www.php.net/manual/es/indexes.functions.php">Listado de funciones PHP predefinidas</a></h3>
<?php

function frase_mayusc($cadena,$conversion=true){

    $cadena=strtolower($cadena);

    if($conversion==true){
        
        $resultado=ucwords($cadena);

    } else {

        $resultado=strtoupper($cadena);

    }

    return $resultado;


}

echo(frase_mayusc("Este es un MUNDO llenod de Falsedades!",false));


?>

</body>
</html>