<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>
<h3>Video 36</h3>
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
<?php

$host = "localhost";
$usuario="root";
$contra="";
$db="pruebas";

//Realizando ejercicio por procedimientos, es la forma mas fácil.
$conexion = mysqli_connect($host,$usuario,$contra,$db);

$consulta = "SELECT * FROM datospersonales";

$resultado = mysqli_query($conexion, $consulta);

$fila=mysqli_fetch_row($resultado);

echo $fila[0] . "   ";

echo $fila[1] . "   ";

echo $fila[2] . "   ";

echo $fila[3] . "   ";

?>

</body>
</html>