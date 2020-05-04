<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<h2> Variables y métodos estáticos</h2>
<h3>static $ayuda=4500;</h3>
<h3>$valor_final=$this->precio_base-self::$ayuda;</h3>
<br><br>
<h3>Para video 29 solo se modifico</h3>
<pre>
private static $ayuda=0;

}// fin constructor
		
		static function descuento_gobierno(){

			self::$ayuda=4500;

		}

	
</pre>
<?php

	include("inc/video28-sub1.php");
	
	// Compra_vehiculo::$ayuda=10000;
	
	Compra_vehiculo::descuento_gobierno();
	
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>