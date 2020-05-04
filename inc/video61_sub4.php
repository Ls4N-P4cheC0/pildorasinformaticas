<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    session_start();

    if(!isset($_SESSION["usuario"])){

        header("location:../video61.php");

    }

?>

<h1 align="center">Bienvenidos Usuarios estas en sección DOS</h1>

<?php

    echo "<h3 align='center'>Hola: " . $_SESSION["usuario"] . "</h3>";

?>

<a href="video61_sub3.php"><h4  align="center">Regresar...</h4></a>

<a href="video61_sub6.php"><h4  align="center">Cerrar sistema...</h4></a>

<h3 align="center">Esta p&aacutegina es solo para usuarios registrados. P&aacutegina DOS</h3>

</body>
</html>