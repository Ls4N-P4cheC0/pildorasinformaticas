<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>

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

    $consulta = "UPDATE ARTÍCULOS SET 
                    SECCIÓN='$sec',
                    NOMBREART='$nom',
                    FECHA ='$fec',
                    PAISORIGEN='$por',
                    IMPORTADO='$imp',
                    PRECIO='$pre'
                 WHERE CLAVE='$cod'
                ";
    echo $consulta . "<br><br>";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado==false){

        echo "Error en la actualización";

    }else {

        if(mysqli_affected_rows($conexion)==0){

            echo "No se actualizo producto con Clave: $cod<br>";

        }else {

            echo "Se actualizo " . mysqli_affected_rows($conexion) . " registros con el criterio ClaveProducto: $cod";

        }

    }

    mysqli_close($conexion);
?>

</body>
</html>