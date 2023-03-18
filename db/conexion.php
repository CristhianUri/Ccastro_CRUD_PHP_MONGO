<?php
    require_once $_SERVER['DOCUMENT_ROOT'] ."./Ccastro_CRUD_PHP_MONGO/vendor/autoload.php";
    class conexion{
        public function conectar() {
           try {
                $servidor = "127.0.0.1";
                $usuario = "mongoadmin";
                $password = "123456";
                $baseDatos = "crud";
                $puerto = "27017";
                $cadenaConexion = "mongodb://". 
                                    $usuario. ":" .
                                    $password. "@" .
                                    $servidor. ":" .
                                    $puerto. "/" .
                                    $baseDatos;
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente -> selectDatabase($baseDatos);
           } catch (\Throwable $th) {
            //throw $th;
            return $th ->getMessage();
           } 
        }
    }
   
?>