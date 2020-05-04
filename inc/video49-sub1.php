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
<h3>Curso PHP MySQL. Inyección SQL I. Vídeo 49</h3>
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

$pais = $_GET["abuscar"];

$consulta = "SELECT CLAVE, SECCIÓN, NOMBREART, FECHA, PAISORIGEN, IMPORTADO, PRECIO
         FROM ARTÍCULOS WHERE PAISORIGEN = ?";

$resultado = mysqli_prepare($conexion, $consulta);  //PASO DOS

$okone=mysqli_stmt_bind_param($resultado, "s", $pais);

$oktwo=mysqli_stmt_execute($resultado);

if($oktwo==false){

    echo "Error al ejecutar la consulta";

}else {

    $okthree=mysqli_stmt_bind_result($resultado,$cla,$sec,$nar,$fec, $por, $imp, $pre);  //paso 5

    echo "<table  id='customers'>";
    echo "<tr><th>CLAVE</th><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th>
          <th>FECHA</th><th>PAIS ORIGEN</th><th>IMPORTADO</th><th>PRECIO</th></tr>";
    
    //PASO 6
    while(mysqli_stmt_fetch($resultado)){
        echo "<tr><td>" . $cla . "</td>";
    
        echo "<td>" . $sec . "</td>";
        
        echo "<td>" . $nar . "</td>";
        
        echo "<td>" . $fec . "</td>";
        
        echo "<td>" . $por . "</td>";
        
        echo "<td>" . $imp . "</td>";
        
        echo "<td>" . $pre . "</td></tr>";
        
    }
    echo "</table>";

    mysqli_stmt_close($resultado);

}


?>

</body>
</html>