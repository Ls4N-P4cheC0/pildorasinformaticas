<style>
    .dalecolor {
        color: orange;
        font-weight: bold;
        font-size: 32px;
        font-family: "Times New Roman", Times, serif";
    }

</style>
<?php

if(isset($_POST["button"])){

   $numero1 = $_POST["num1"];
   $numero2 = $_POST["num2"];
   $operacion = $_POST["operacion"];

   mi_calculo($operacion);

}

function mi_calculo($tipoope){
   
    global $numero1;
    global $numero2;

    $resultado = 0.0;

   if(!strcmp("Suma",$tipoope)){

       $resultado = $numero1 + $numero2;
       echo "<p class='dalecolor'>El resultado de $tipoope es: $resultado</p>";

   }

   if(!strcmp("Resta",$tipoope)){

      echo "El resultado de la resta es: " . ($numero1 - $numero2);

   }
   if(!strcmp("Multiplicación",$tipoope)){

      echo "El resultado de la multiplicación es: " . ($numero1 * $numero2);

   }
    if(!strcmp("División",$tipoope)){

    echo "El resultado de la división es: " . ($numero1 / $numero2);

    }
    if(!strcmp("Módulo",$tipoope)){

    echo "El resultado del módulo es: " . ($numero1 % $numero2);

    }

}

?>
