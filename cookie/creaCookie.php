<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    setcookie("idioma_seleccionado", $_GET["idioma"], time()+86400);

    header("Location:ver_cookie.php")

?>

</body>
</html>