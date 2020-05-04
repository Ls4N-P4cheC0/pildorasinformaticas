
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}

</style>

<?php

if(isset($_POST["enviando"])){
    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];
    if ($usuario=="Juan"){

        echo "<p class='validado'>PUEDES ENTRAR</p>";

    } else {

        echo "<p class=\"no_validado\">NOOO PUEDES ENTRAR</p>";

    }
}
echo "Estoy en la subrutina";

?>