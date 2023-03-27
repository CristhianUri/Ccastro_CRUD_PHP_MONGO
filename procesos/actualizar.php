<?php session_start();
     include "../db/conexion.php";
     include "../db/Crud.php";
     $Crud = new Crud();
     $id = $_POST['id'];

     $datos = array(
        
         "paterno" => $_POST['paterno'],
         "materno"=>$_POST['materno'],
         "nombre" =>$_POST['nombre'],
         "fecha_nacimiento" => $_POST['fechaNacimiento']
     );
    $respuesta = $Crud->actualiza($id,$datos);
     if ($respuesta->getModifiedCount>0 ||$respuesta->getMatchedCount()>0) {
        # code...
        $_SESSION['mensaje_cruf']= 'update';
        header ("location: ../index.php");
     } else {
        # code...
        print_r($respuesta);
     }
     
 
?>