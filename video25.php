<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<h4>Curso PHP MySQL. Programación Orientada a Objetos POO IV. Herencia. Vídeo 25</h4>
<p>
    Concepto de programación orientada a Objetos<br>
</p>
<p>
</p>
<?php

    include("inc/video25-sub1.php");

    $mazda=new Coche();    //Estado inicial al objeto o instancias
    $seat=new Coche();

    $pegaso=new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

    $mazda->establece_color("rojo","Mazda");
    $seat->establece_color("Azul","Seat");

    echo "<br>";

    echo "El color del Mazda quedo siempre en: " . $mazda->color . "<br>";
    echo "El color del Seat quedo siempre en: " . $seat->color . "<br>";
    
    $pegaso->arrancar();
?>

</body>
</html>