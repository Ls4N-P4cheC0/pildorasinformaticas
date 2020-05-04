<?php

    require("conexion.php");

    class DevuelveProductos extends Conexion{

        public function DevuelveProductos(){

            parent::__construct();

        }

        public function get_productos($pais){

            $resultado=$this->conexion_db->query('SELECT * FROM ARTÍCULOS WHERE PAISORIGEN="' . $pais . '"');

            $productos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $productos;

        }

    }

?>