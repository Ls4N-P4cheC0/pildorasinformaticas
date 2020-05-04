<?php

    require("inc/devuelveproductos.php");

    $productos=new DevuelveProductos();

    $array_productos=$productos->get_productos();

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>

<?php

    echo "<table  id='customers'>";
    echo "<tr><th>CLAVE</th><th>SECCIÓN</th><th>NOMBRE ARTÍCULO</th>
        <th>FECHA</th><th>PAIS ORIGEN</th><th>IMPORTADO</th><th>PRECIO</th></tr>";

    foreach($array_productos as $registro){

        echo "<tr><td>" . $registro['CLAVE'] . "</td>";
    
        echo "<td>" . $registro['SECCIÓN'] . "</td>";
        
        echo "<td>" . $registro['NOMBREART'] . "</td>";
        
        echo "<td>" . $registro['FECHA'] . "</td>";
        
        echo "<td>" . $registro['PAISORIGEN'] . "</td>";
        
        echo "<td>" . $registro['IMPORTADO'] . "</td>";
        
        echo "<td>" . $registro['PRECIO'] . "</td></tr>";

    }

    echo "</table>";


?>

</body>
</html>