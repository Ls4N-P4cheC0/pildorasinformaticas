<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>
<h3>Curso PHP MySQL. Obteniendo registros de la BBDD. Vídeo 37</h3>
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
<?php

$host = "localhost";
$usuario="root";
$contra="";
$db="pruebas";

//Realizando ejercicio por procedimientos, es la forma mas fácil.
$conexion = mysqli_connect($host,$usuario,$contra);

if(mysqli_connect_errno()){

    echo "Fallo al conectar a la base de BBDD: " . mysqli_connect_errno() ;

    exit();
}

mysqli_select_db($conexion,$db) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta = "SELECT * FROM datospersonales";

$resultado = mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_row($resultado)){

    echo $fila[0] . "   ";

    echo $fila[1] . "   ";
    
    echo $fila[2] . "   ";
    
    echo $fila[3] . "   ";

    echo "<br>";
}

mysqli_close($conexion);

?>

</body>
</html>