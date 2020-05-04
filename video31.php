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

echo "<h3>Recorriendo arrar por indice, se sabe cuantos elementos tiene el arreglo <br></h3>";
for($i=0;$i<4;$i++) {
    echo $diassem[$i] . "<br>";
}

echo "<br><br>";
$meses=array("Enero","febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo "<h3>Recorriendo por indices pero no se sabe cuantos elementos tiene el arreglo</h3>";
for($i=0;$i<count($meses);$i++){
    echo $meses[$i] . "<br>";
}

echo "<br><br>";
$estacion[0]="Primavera";
$estacion[1]="Verano";
$estacion[2]="Otoño";
$estacion[3]="Invierno";
echo $estacion[2] . "<br>";


//Arrays asociativos
echo "<br><h3>Ejemplificando arrays asociativos</h3><br>";
$datos = array("Nombre"=>"Luis","Appat"=>"Sánchez","AppMat"=>"Pacheco","Edad"=>52);

foreach($datos as $campo=>$valor){

    echo "Para cada valor de $campo se tiene el valor de $valor" . "<br>";


}

?>

</body>
</html>