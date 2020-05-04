<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>
<body>
<?php
echo "Variable estaticas. Se declaran dentro de la función,<br>no se destruyen al terminar la funcion y se<br> ejecuta solo la primera vez que se llama al código";
echo "<br><br>";

function incrementaVariable(){
    static $contador=0;
    $contador++;
    echo $contador . "<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
?>
</body>
</html>