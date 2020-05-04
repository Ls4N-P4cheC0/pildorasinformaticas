<?php

    require("conexion2.php");

    class DevuelveProductos extends Conexion{

        public function DevuelveProductos(){

            parent::__construct();

        }

        public function get_productos($pais){

            $sql="SELECT * FROM ARTÍCULOS WHERE PAISORIGEN='" . $pais . "'";

            $sentencia=$this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;

        }

    }

?>