<?php
    include "../db/conexion.php";
    include "../db/Crud.php";
    $Crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $Crud -> eliminar($id);

    if ($respuesta ->getDeletedCount()>0) {
        # code...
        header("location:../index.php");
    } else{
        print_r($respuesta);
    }
?>