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

    include("inc/video26-sub1.php");

    $mazda=new Coche();    //Estado inicial al objeto o instancias
    $seat=new Coche();

    $pegaso=new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";
    
    $pegaso->arrancar();

?>

</body>
</html>