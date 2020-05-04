<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
    <link rel="stylesheet" type="text/css" href="../css/formularioart.css" media="screen" />
    <style>
       h1, h2 { text-align:center; }

       
    </style>
</head>
<body>
<?php

if(isset($_POST["enviando"])){
    try{

        $base=new PDO("mysql:host=localhost; dbname=pruebas", "root","");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";

        $resultado=$base->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"]));

        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);

        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

            session_start();

            $_SESSION["usuario"] = $_POST["login"];

            //header("location: video61_sub3.php");

        }else {

            //header("location: ../video61.php");

            echo "Error!!! Usuario o contraseña correctos";

        }
    }catch(Exception $e){

        die("error: " . $e->getMessage());

    }
}

?>

<h3>Sistema de login III. Vídeo 61</h3>
<br>
<h1>Buscando producto en tabla de artículos con POO</h1>

<?php
if(!isset($_SESSION["usuario"])){
    include("video62_sub1.html");
}else{
    echo "Usuario: " . $_SESSION["usuario"];
}

?>

<h2>CONTENIDO DE LA WEB</h2>
<table widht="800" border="0">
    <tr>
        <td><img src="video62-img1.png" width="300" height="166"></td>
        <td><img src="video62-img2.png" width="300" height="197"></td>
    </tr>
    <tr>
        <td><img src="video62-img3.png" width="300" height="166"></td>
        <td><img src="video62-img4.png" width="300" height="197"></td>
    </tr>
</table>

</body>
</html>
