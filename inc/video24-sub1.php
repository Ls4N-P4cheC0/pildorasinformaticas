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

        function establece_color($color_coche,$nombre_coche){
            $this->color=$color_coche;
            echo "El color de " . $nombre_coche . "es: " . $this->color . "<br>";
            
        }
    }

    class Camion {

        //Características o propiedades
        var $ruedas;
        var $color;
        var $motor;

        //Método constructor
        function Camion(){
            $this->ruedas=8;

            $this->color="gris";   //Que tiene un color indefinido

            $this->motor=2600;
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

?>