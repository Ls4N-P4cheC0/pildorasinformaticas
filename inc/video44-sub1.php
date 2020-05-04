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

<?php
    require("db_connection.php");

    $cod=$_GET["c_art"];

    $sec=$_GET["seccion"];

    $nom=$_GET["n_art"];

    $fec=$_GET["fecha"];

    $por=$_GET["p_orig"];

    $pre=$_GET["precio"];

    $imp=$_GET["importado"];

    $db="pruebas";

    //Realizando ejercicio por procedimientos, es la forma mas fácil.
    $conexion = mysqli_connect($host,$usuario,$contra);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar a la base de BBDD: " . mysqli_connect_errno() ;

        exit();
    }

    mysqli_select_db($conexion,$db) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion,"utf8");

    $consulta = "DELETE FROM ARTÍCULOS WHERE CLAVE='$cod'";
    echo $consulta . "<br><br>";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado==false){

        echo "Error en la consulta";

    }else {

        if(mysqli_affected_rows($conexion)==0){

            echo "No hay registros que eliminar con el criterio ClaveProducto: $cod<br>";

        }else {

            echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros con el criterio ClaveProducto: $cod";

        }

    }

    mysqli_close($conexion);
?>

</body>
</html>