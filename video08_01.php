<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
         video08-E1
    </title>
    <style>
       .resaltar {
           color:#F00;
           font-weight:bold;
       }
       .resaltar2 {
           color:#00FF00;
           font-weight:bold;
       }
       .resaltar3 {
           color:#4900ff;
           font-weight:bold;
       }
    </style>
</head>
<body>
<?php

$nombre = "Juan";

echo "<p class=\"resaltar\">Esto es un ejemplo de frase. con la diagonal con escape de caracteres</p>";
echo "<br>";
echo "<p class='resaltar'>Esto es un ejemplo de frase. Con comillas dobles-comillas sencillas</p>";
echo "<p class='resaltar2'>Incluir nombre de variable dentro cadena $nombre</p>";
echo "<br><br>";
echo "Funciones strcmp y strcasecmp, devuleve 1 si dif y 0 si igual<br>";

$variable1 = "CaSa";
$variable2 = "CASA";

$resultado = strcmp($variable1, $variable2);

echo 'Comparando $variable1 = "Casa" y $variable2 = "CASA" con funcion strcmp da como resultado: ' . $resultado; 
echo "<br>";
$resultado = strcasecmp($variable1,$variable2);
echo 'Comparando $variable1 = "Casa" y $variable2 = "CASA" con funcion strcasecmp da como resultado: ' . $resultado; 
echo "<br>";

?>

<?php 
// Verficiamos si dos cadenas son iguales e identicas 

// strcmp -- diferencia entre mayusculas y minusculas 
// strcasecmp -- no diferencia entre mayusculas y minusculas 
// Ambas devuelven 0 ó -1 

$var1= "Uterra.com"; 
$var2= "uterra.com"; 

$verf_identico = strcmp($var1, $var2); 

if ($verf_identico <> 0)  
{  
echo "<b>$var1</b> y <b>$var2</b> NO son identicos ($verf_identico)";  
}  
else  
{  
echo "<b>$var1</b> y <b>$var2</b> son identicos ($verf_identico)";  
}  

?>

</body>
</html>