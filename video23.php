<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<h4>Curso PHP MySQL. Programación Orientada a Objetos POO I. Vídeo 22</h4>
<p>
    Concepto de programación orientada a Objetos<br>
    -Creación de clases (ojetos) en PHP.<br>
    -Concepto y creaci&oacuten de instancia de clase.<br>
    <br>
    Objeto --> Cuenta con propiedades (Color, Peso, Alto, Largo.. Etc.)<br>
               Tiene comportamiento (¿Qué es capaz de hacer? Arrancar, Frenar, Girar,Acelerar)<br>
</p>
<p>
Los objetos deben tener un estado inicial, características iniciales<br>
<br>
El estado inicial lo hace la función constructor<cr>
Esta función constructor debe tener el mismo nombre que la clase. <br>
<br>
Cuando se definen las propiedades se escribe var, signo de dolar y el nombre de la propiedad<br>
Cuando se hace referencia a las propiedades NO SE ESCRIBE signo de dolar<br>
</p>
<?php

    class Coche {

        //Características o propiedades
        var $ruedas;
        var $color;
        var $motor;

        //Método constructor
        function Coche(){
            $this->ruedas=4;

            $this->color="";   //Que tiene un color indefinido

            $this->motor=1600;
        }

        //Funcionalidades o metodos
        function arrancar(){
            echo "Estoy arrancando";

        }

        function girar(){
            echo "Estoy girando";

        }

        function frenar(){
            echo "Estoy frenando";

        }
    }

    $renault=new Coche();    //Estado inicial al objeto o instancias

    $mazda=new Coche();

    $seat=new Coche();

    $mazda->girar();
    echo "<br>";
    echo "Tengo " . $mazda->ruedas . " ruedas";
?>

</body>
</html>