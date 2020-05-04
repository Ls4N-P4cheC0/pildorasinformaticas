
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php
$seccabuscar=$_GET["abuscar"];

echo "buscando" . $seccabuscar . "<br>";

try{

    $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql = "SELECT CLAVE, SECCIÓN, NOMBREART, FECHA, PAISORIGEN, IMPORTADO, PRECIO
         FROM ARTÍCULOS WHERE SECCIÓN = ?";

    $resultado=$base->prepare($sql);

    $resultado->execute(array($seccabuscar));

    echo "<table  id='customers'>";
    echo "<tr><th>CLAVE</th><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th>
          <th>FECHA</th><th>PAIS ORIGEN</th><th>IMPORTADO</th><th>PRECIO</th></tr>";

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        echo "<tr><td>" . $registro['CLAVE'] . "</td>";
    
        echo "<td>" . $registro['SECCIÓN'] . "</td>";
        
        echo "<td>" . $registro['NOMBREART'] . "</td>";
        
        echo "<td>" . $registro['FECHA'] . "</td>";
        
        echo "<td>" . $registro['PAISORIGEN'] . "</td>";
        
        echo "<td>" . $registro['IMPORTADO'] . "</td>";
        
        echo "<td>" . $registro['PRECIO'] . "</td></tr>";

    }

    echo "</table>";

    $resultado->closeCursor();
    
    }catch (Exception $e){
    
    die('Error: ' . $e->GetMessage);
    
    }finally{
    
    $base=null;
    
    }
    
    

?>

</body>
</html>