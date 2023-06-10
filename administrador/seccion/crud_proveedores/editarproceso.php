<?php

    print_r($_POST);
    if(!isset($_POST['id'])){
        header('location: proveedores.php?mensaje=error');
    }

    include("../../config/bd.php");
    $id=$_POST['id'];
    $nombre=$_POST['txtNombreProv'];
    $apellido=$_POST['txtApellidoProv'];
    $telefono=$_POST['txtTelefonoProv'];
    $tipopersona=$_POST['txtTipoProv'];
    $numidentif=$_POST['txtNumProv'];
    $sentencia=$conexion->prepare("UPDATE proveedores SET nombre=?, apellido=?, telefono=?, id_tipo_persona=?, num_identificacion=? WHERE id=?;");
    $resultado = $sentencia ->execute([$nombre,$apellido,$telefono,$tipopersona,$numidentif, $id]);
    if ($resultado===TRUE) {
        header('location: proveedores.php?mensaje=modificado');
    } else {
        header('location: proveedores.php?mensaje=error');
        exit();
    }
    

?>