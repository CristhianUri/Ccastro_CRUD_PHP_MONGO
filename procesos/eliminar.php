<?php session_start();
    include "../db/conexion.php";
    include "../db/Crud.php";
    $Crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $Crud -> eliminar($id);

    if ($respuesta ->getDeletedCount()>0) {
        # code...
        $_SESSION['mensaje_cruf']= 'delete';
        header("location:../index.php");
    } else{
        print_r($respuesta);
    }
?>