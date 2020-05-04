<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<h3>Curso PHP MySQL. Inyección SQL I. Vídeo 47</h3>
<pre>
Se introduce lo siguiente en el texto de busqueda: cenicero' OR 'X'='X
PRODUCE POR ERROR LA SIGUIENTE CADENA:
Query: [SELECT * FROM ARTÍCULOS WHERE NOMBREART = 'cenicero' OR 'X'='X' ]
</pre>
<br><br>

<FORM ACTION="inc/video47-sub1.php" method="GET">

<LABEL FOR="abuscar">Nombre de producto:</LABEL>
<INPUT TYPE="TEXT" NAME="abuscar" />
<INPUT TYPE="SUBMIT" NAME="enviando" VALUE="Buscando..." />

</FORM>
<?php


?>

</body>
</html>
