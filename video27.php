<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>


<h2>POO Modificadores de acceso I</h2>
<h3>Modularización</h3>
<h3>Encapsulación</h3>
<h3>Modificadores de acceso:<br>
<lo>
<li>Public</li>
<li>Private</li>
<li>Protected.</li>
</lo>
 
<?php

    include("inc/video27-sub1.php");

    $mazda=new Coche();    //Estado inicial al objeto o instancias
    $seat=new Coche();

    $pegaso=new Camion();

    echo "<br><br>";

    echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";
    echo "<br>";
    echo "El Mazda tiene un motor de: " . $mazda->get_motor() . " c.c.<br>";
    echo "<br><br>";
    $pegaso->arrancar();

?>

</body>
</html>