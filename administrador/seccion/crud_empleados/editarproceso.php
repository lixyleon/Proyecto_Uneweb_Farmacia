<?php

    print_r($_POST);
    if(!isset($_POST['id'])){
        header('location: empleados.php?mensaje=error');
    }

    include("../../config/bd.php");
    $id=$_POST['id'];
    $nombre=$_POST['txtNombreEmpl'];
    $apellido=$_POST['txtApellidoEmpl'];
    $telefono=$_POST['txtTelefonoEmpl'];
    $tipopersona=$_POST['txtTipoEmpl'];
    $numidentif=$_POST['txtNumEmpl'];
    $sucursal=$_POST['txtSucursal'];

    $sentencia=$conexion->prepare("UPDATE empleados SET nombre=?, apellido=?, telefono=?, id_tipo_persona=?, num_identificacion=?, id_sucursal=? WHERE id=?;");
    $resultado = $sentencia ->execute([$nombre,$apellido,$telefono,$tipopersona,$numidentif,$sucursal, $id]);
   
    if ($resultado===TRUE) {
        header('location: empleados.php?mensaje=modificado');
    } else {
        header('location: empleados.php?mensaje=error');
        exit();
    }
    

?>