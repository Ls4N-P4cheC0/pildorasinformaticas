<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

setcookie("idioma_seleccionado", "mx", time()-1);
setcookie("idioma_seleccionado", "in", time()-1);

header("Location:../index.php");

?>

</body>
</html>