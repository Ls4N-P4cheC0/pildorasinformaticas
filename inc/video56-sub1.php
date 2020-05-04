<?php

$cod=$_POST["c_art"];

$sec=$_POST["seccion"];

$nom=$_POST["n_art"];

$pre=$_POST["precio"];

$fec=$_POST["fecha"];

$imp=$_POST["importado"];

$por=$_POST["p_orig"];

try{

    $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql = "INSERT INTO ARTÍCULOS (CLAVE, SECCIÓN, NOMBREART, FECHA, PAISORIGEN, IMPORTADO, PRECIO)
    VALUES (:cve, :sec, :nar, :fec, :por, :imp, :pre)";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":cve"=>$cod, ":sec"=>$sec, ":nar"=>$nom, 
              "fec"=>$fec, ":por"=>$por, "imp"=>$imp, ":pre"=>$pre));

    $resultado->closeCursor();

    echo "<h1>UPDATE SUCCESSFUL!!!</h1>";
    
    }catch (Exception $e){
    
    die('Error: ' . $e->GetMessage);
    
    }finally{
    
    $base=null;
    
    }


?>