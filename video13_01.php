<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video12 - Pildoras Informáticas</title>
<style>
    .dalecolor {
        color: orange;
        font-weight: bold;
        font-size: 32px;
        font-family: "Times New Roman", Times, serif";
    }

</style>
</head>

<body>

<p>&nbsp;</p>

<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>

<p>&nbsp;</p>

<?php

require("lib/video13_01_srut1.php");

if(isset($_POST["button"])){

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
 
    mi_calculo($operacion);
 
 }

?>

</body>
</html>