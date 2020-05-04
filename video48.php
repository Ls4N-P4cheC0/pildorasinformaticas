<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<h3>Inyección SQL II. Vídeo 48</h3>
<pre>
¿Como evitar la inyección SQL?
    Uso de la función mysqli_real_escape_string()   <-- Esta es la mas recomendada
    Uso de la función mysqli_addslashes()
    Consultas preparadas

Se introduce lo siguiente en el texto de busqueda: cenicero' OR 'X'='X
PRODUCE POR ERROR LA SIGUIENTE CADENA:
Query: [SELECT * FROM ARTÍCULOS WHERE NOMBREART = 'cenicero' OR 'X'='X' ]
</pre>
<br><br>

<FORM ACTION="inc/video48-sub1.php" method="GET">

<LABEL FOR="abuscar">Nombre de producto:</LABEL>
<INPUT TYPE="TEXT" NAME="abuscar" />
<INPUT TYPE="SUBMIT" NAME="enviando" VALUE="Buscando..." />

</FORM>
<?php


?>

</body>
</html>
