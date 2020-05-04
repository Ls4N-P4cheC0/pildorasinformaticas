<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

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

        header("location: video60_sub2.php");

    }else {

        header("location: ../video60.php");

    }
}catch(Exception $e){

    die("error: " . $e->getMessage());


}


?>

</body>
</html>