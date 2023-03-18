<?php

    class Crud extends conexion {
        public function mostrarDatos(){
            try {
                $conexion = parent :: conectar();
                $coleccion = $conexion ->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                //throw $th;
                return $th ->getMessage();
            }
        }
    }
?>