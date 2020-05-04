<?php

$cod=$_POST["c_art"];

try{

    $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql = "DELETE FROM ARTÍCULOS WHERE CLAVE=:cve";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":cve"=>$cod));

    echo "<h1>DELETE SUCCESSFUL!!!!</h1>";
    
    $resultado->closeCursor();

}catch (Exception $e){
    
    die('Error: ' . $e->GetMessage);
    
    }finally{
    
    $base=null;
    
    }


?>