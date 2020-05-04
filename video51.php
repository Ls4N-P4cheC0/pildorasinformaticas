<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>

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

<?php

$conexion = new mysqli("localhost","root","","pruebas");

if($conexion->connect_errno){

    echo "Falló la conexión" . $conexion->connect_errno;

}

$conexion->set_charset("utf8");

$sql = "SELECT * FROM ARTÍCULOS";

$resultados=$conexion->query($sql);

if($conexion->errno){

    die($conexion->error);

}

echo "<table  id='customers'>";
echo "<tr><th>CLAVE</th><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th>
      <th>FECHA</th><th>PAIS ORIGEN</th><th>IMPORTADO</th><th>PRECIO</th></tr>";

while($fila=$resultados->fetch_assoc()){

    echo "<tr><td>" . $fila['CLAVE'] . "</td>";

    echo "<td>" . $fila['SECCIÓN'] . "</td>";

    echo "<td>" . $fila['NOMBREART'] . "</td>";
    
    echo "<td>" . $fila['FECHA'] . "</td>";
    
    echo "<td>" . $fila['PAISORIGEN'] . "</td>";
    
    echo "<td>" . $fila['IMPORTADO'] . "</td>";

    echo "<td>" . $fila['PRECIO'] . "</td></tr>";

}

echo "</table>";

?>

</body>
</html>