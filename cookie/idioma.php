<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Curso PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/tablaarticulo.css" media="screen" />
</head>
<body>
<?php

    if(isset($_COOKIE["idioma_seleccionado"])){

        if($_COOKIE["idioma_seleccionado"]=="mx"){

            header("Location:idioma-mex.php");

        }else if($_COOKIE["idioma_seleccionado"]=="in"){

            header("Location: idioma-eng.php");
    
        }

    }

?>
<table width="25%" border="0" align="center">
    <tr>
        <td colspan="2" align="center"><h1>Elige idioma</h1></td>
    </tr>
    <tr>
        <td align="center"><a href="creaCookie.php?idioma=mx"><img src="img/idiomamex.png" width="90" height="60"></a></td>
        <td align="center"><a href="creaCookie.php?idioma=in"><img src="img/idiomaeng.png" width="90" height="60"></a></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>