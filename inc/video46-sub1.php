<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>

</head>

<body>
<?php

    require("db_connection.php");

    $db="pruebas";

    $conexion = mysqli_connect($host,$usuario,$contra);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar a la base de BBDD: " . mysqli_connect_errno();

        exit();
    }

    mysqli_select_db($conexion,$db) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion,"utf8");

    $articulobuscar = $_GET["abuscar"];

    $consulta = "SELECT * FROM ARTÍCULOS WHERE CLAVE LIKE '%$articulobuscar%' ";

    $resultado = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($resultado)!=1){

      echo "<script type='text/javascript'>";
      echo "confirm('($articulobuscar) No se encontro valor proporcionado');";
      echo "window.history.back(-1);";
      echo "</script>";

    }

    $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)
?>

<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="video46-sub2.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="c_art"></label>
      <input type="text" name="c_art" id="c_art" value="<? echo $fila['CLAVE']; ?>"></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td><label for="seccion"></label>
      <input type="text" name="seccion" id="seccion" value="<? echo $fila['SECCIÓN']; ?>"></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art" value="<? echo $fila['NOMBREART']; ?>"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio" value="<? echo $fila['PRECIO']; ?>"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha" value="<? echo $fila['FECHA']; ?>"></td>
    </tr>
    <tr>
      <td>Importado</td>
      <td><label for="importado"></label>
      <input type="text" name="importado" id="importado" value="<? echo $fila['IMPORTADO']; ?>"></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td><label for="p_orig"></label>
      <input type="text" name="p_orig" id="p_orig" value="<? echo $fila['PAISORIGEN']; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="grabar" id="enviar" value="Grabar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Limpiar campos"></td>
    </tr>
  </table>
</form>
</body>
</html>