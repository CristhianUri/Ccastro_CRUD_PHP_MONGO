<?php
    include "../db/conexion.php";
    include "../db/Crud.php";
    $Crud = new Crud();
    $datos = array(
        "paterno" => $_POST['paterno'],
        "materno"=>$_POST['materno'],
        "nombre" =>$_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta = $Crud -> insertarDatos($datos);

    if ($respuesta ->getInsertedId()) {
        # code...
        header("location:../index.php");
    } else{
        print_r($respuesta);
    }
?>