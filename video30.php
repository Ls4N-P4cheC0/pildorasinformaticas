<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<?php
$diassem[]="Lunes";
$diassem[]="Martes";
$diassem[]="Miercoles";
$diassem[]="Jueves";

echo $diassem[3] . "<br>";

$meses=array("Enero","febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $meses[10] . "<br>";

$estacion[0]="Primavera";
$estacion[1]="Verano";
$estacion[2]="Otoño";
$estacion[3]="Invierno";
echo $estacion[2] . "<br>";
//Arrays asociativos

$datos = array("Nombre"=>"Luis","Appat"=>"Sánchez","AppMat"=>"Pacheco","Edad"=>52);

echo $datos["AppMat"] . "<br>";

?>

</body>
</html>