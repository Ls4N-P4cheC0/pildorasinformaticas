
<?php

function mi_calculo($tipoope){
   
    global $numero1;
    global $numero2;

    $resultado = 0.0;

   if(!strcmp("Suma",$tipoope)){

       $resultado = $numero1 + $numero2;
       echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

   }

   if(!strcmp("Resta",$tipoope)){

    $resultado = $numero1 - $numero2;
    echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

   }
   if(!strcmp("Multiplicación",$tipoope)){

    $resultado = $numero1 * $numero2;
    echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

   }
    if(!strcmp("División",$tipoope)){

        $resultado = $numero1 / $numero2;
        echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

    }
    if(!strcmp("Módulo",$tipoope)){

        $resultado = $numero1 % $numero2;
        echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

    }

    if(!strcmp("Incremento",$tipoope)){
        $numero1++;
        $resultado = $numero1;
        echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

    }
    if(!strcmp("Decremento",$tipoope)){
        $numero1--;
        $resultado = $numero1;
        echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

    }

}

?>
