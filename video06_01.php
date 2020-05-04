<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>
<body>
<?php
//  https://www.youtube.com/watch?v=wcNXqTkISvg

$nombre="Luis";

function dameNombre(){

   global $nombre;

   echo "<br>";
   echo "La declaración de global se hace dentro de la función<br> ";
   
   $nombre = "El nombre es" . $nombre . "<br>";


}

function daNombre2(){
    global $nombre;
    $nombre = $nombre . "   Se entro a la segunda función";
}

dameNombre();

daNombre2();

echo $nombre;

?>
</body>
</html>