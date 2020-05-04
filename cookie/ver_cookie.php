<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>

<body>

<?php

    if(!$_COOKIE["idioma_seleccionado"]){

        header("Location:idioma.php");

    }else if($_COOKIE["idioma_seleccionado"]=="mx"){

        header("Location:idioma-mex.php");

    } else if($_COOKIE["idioma_seleccionado"]=="in"){

        header("Location: idioma-eng.php");

    }

?>

</body>
</html>