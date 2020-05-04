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
<h3>Importación de tablas MySql. Consultas SQL con filtros. Vídeo 38</h3>
<h3>Consultas de selección con SQL</h3>
<pre>
    SELECT NIF, NOMBRE, APELLIDO, EDAD FROM DATOS PERSONALES

    Conexion a una base de datos--> Modos-+->Orientado a Objetos --> Clase Mysqli
                                          |
                                          +->Por Procedimientos  --> Función mysqli_connect


Se carga en el resulset o recordset

mysqli_conect()
mysqli_query
mysql_fetch_row

</pre>
<h3>Consulta MySQL por Procedimientos</h3>
<pre>
require de db_connection
Exportar Excel xlsx a "Hoja de cálculo de OpenDocument (.ods"
Consultas condicionadas
Crear un archivo con instrucciones SQL e importarlo desde PHPMyAdmin
Exportar archivo a SQM desde PHPMyAdmin
S
</pre>
<?php

require("inc/db_connection.php");

$db="pruebas";

//Realizando ejercicio por procedimientos, es la forma mas fácil.
$conexion = mysqli_connect($host,$usuario,$contra);

if(mysqli_connect_errno()){

    echo "Fallo al conectar a la base de BBDD: " . mysqli_connect_errno() ;

    exit();
}

mysqli_select_db($conexion,$db) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta = "SELECT * FROM ARTÍCULOS WHERE PAISORIGEN='España' ";

$resultado = mysqli_query($conexion, $consulta);

echo "<table  id='customers'>";
echo "<tr><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th><th>FECHA</th><th>PAIS ORIGEN</th><th>PRECIO</th></tr>";

while($fila=mysqli_fetch_row($resultado)){
    echo "<tr><td>" . $fila[0] . "</td>";

    echo "<td>" . $fila[1] . "</td>";
    
    echo "<td>" . $fila[2] . "</td>";
    
    echo "<td>" . $fila[3] . "</td>";
    
    echo "<td>" . $fila[4] . "</td></tr>";
    
}
echo "</table>";

mysqli_close($conexion);

?>

</body>
</html>