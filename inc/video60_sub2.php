<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    session_start();

    if(!isset($_SESSION["usuario"])){

        header("location:../video60.php");

    }

?>

<h1>Bienvenidos Usuarios</h1>

<?php

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

?>

<h3>Esta página es solo para usuarios registrados</h3>

</body>
</html>