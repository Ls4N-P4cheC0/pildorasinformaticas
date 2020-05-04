<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    setcookie("prueba","Esta es mi Hola mundo! de las cookies",time()+30);
    echo "<h1>Creando la primera COOKIE</h1>";

    // crear las cookies
    setcookie("cookie[tres]", "cookietres");
    setcookie("cookie[dos]", "cookiedos");
    setcookie("cookie[uno]", "cookieuno");

    // imprimirlas luego que la página es recargada
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $name => $value) {
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name : $value <br />\n";
        }
    }

?>

</body>
</html>