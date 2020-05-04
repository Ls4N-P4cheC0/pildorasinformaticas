<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<?php

function cambia_mayusc($param){

    $param=strtolower($param);

    $param=ucwords($param);

    return $param;
}

function cambia_cadena2(&$param){

    $param=strtolower($param);

    $param=ucwords($param);

    return $param;
}

$cadena ="hOlA mUnDo";

echo "Función por valor<br>";
echo "Cadena antes de entrar a la función: $cadena <br>";
echo "Cadena en función  por valor: " . cambia_mayusc($cadena) . "<br>";
echo "Cadena despues de salir de la función $cadena <br>"; 
echo "<br>Función por referencia<br>";
$cadena2="hOlA mUnDo";
echo "Cadena antes de ir a la función: $cadena2 <br>";
echo "Cadena generada en función cambia_cadena2: " . cambia_cadena2($cadena2) . "<br>"; 
echo "Cadena despues de salir de la función por referencia $cadena2 <br>"

?>

</body>
</html>