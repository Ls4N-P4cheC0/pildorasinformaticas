<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    if(isset($_COOKIE["prueba"])){

        echo "<h1>El valor de cookie prueba: " . $_COOKIE["prueba"] . "</h1>";

    }else{

        echo "<h1>Error! Cookie prueba no encontrada</h1>";

    }
    setcookie("prueba","Esta es mi Hola mundo! de las cookies");
    echo "<h1>Creando la primera COOKIE</h1>";

?>

</body>
</html>