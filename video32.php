<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<?php

$alimentos=array(
    "fruta"=>array(
        "tropical"=>"kiwi",
        "citrico"=>"mandarina",
        "otros"=>"manzana"
    ),

    "leche"=>array(
        "animal"=>"vaca",
        "vegetal"=>"coco"
    ),

    "carne"=>array(
        "vacuno"=>"lomo",
        "porcino"=>"pata"
    )
);

echo "<br><h3>Despliegue de arreglo multidimencional por cilcos foreach</h3>";
foreach($alimentos as $clave_alim=>$alim){

    echo "$clave_alim: <br>";

    while(list($clave,$valor)=each($alim)){

        echo "$clave=$valor <br>";

    }

    echo "<br>";
}
?>

</body>
</html>