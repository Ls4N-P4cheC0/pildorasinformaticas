<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
    <style>
        #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        }
    </style>
</head>
<body>
<h3>Curso PHP MySQL. Inyección SQL I. Vídeo 47</h3>
<?php

require("db_connection.php");

$db="pruebas";

//Realizando ejercicio por procedimientos, es la forma mas fácil.
$conexion = mysqli_connect($host,$usuario,$contra);

if(mysqli_connect_errno()){

    echo "Fallo al conectar a la base de BBDD: " . mysqli_connect_errno() ;

    exit();
}

mysqli_select_db($conexion,$db) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$articulobuscar = mysqli_real_escape_string($conexion, $_GET["abuscar"]);

$consulta = "SELECT * FROM ARTÍCULOS WHERE NOMBREART = '$articulobuscar' ";

$resultado = mysqli_query($conexion, $consulta);

echo "Query: [" . $consulta . "]";

echo "<table  id='customers'>";
echo "<tr><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th><th>FECHA</th><th>PAIS ORIGEN</th><th>PRECIO</th></tr>";

while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    echo "<tr><td>" . $fila['SECCIÓN'] . "</td>";

    echo "<td>" . $fila['NOMBREART'] . "</td>";
    
    echo "<td>" . $fila['FECHA'] . "</td>";
    
    echo "<td>" . $fila['PAISORIGEN'] . "</td>";
    
    echo "<td>" . $fila['PRECIO'] . "</td></tr>";
    
}
echo "</table>";

mysqli_close($conexion);

?>

</body>
</html>