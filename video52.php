<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO Conexión a BBDD. Vídeo 52</title>
</head>
<body>

<?php
    try{

        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Conexión OK';

    }catch (Exception $e){

        die('Error: ' . $e->GetMessage);

    }finally{

        $base=null;

    }


?>

</body>
</html>