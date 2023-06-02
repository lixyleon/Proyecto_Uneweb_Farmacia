<?php

    print_r($_POST);
    if(!isset($_POST['id'])){
        header('location: inventario.php?mensaje=error');
    }

    include("../../config/bd.php");
    $id=$_POST['id'];
    $tipo=$_POST['txtTipo'];
    $codigo=$_POST['txtCodigo'];
    $nombre=$_POST['txtNombre'];
    $cantidad=$_POST['txtCantidad'];
    $precio=$_POST['txtPrecio'];
    $sucursal=$_POST['txtSucursal'];
    $sentencia=$conexion->prepare("UPDATE inventario SET id_tipo_producto=?, codigo=?, nombre=?, cantidad=?, precio=?, id_sucursal=? WHERE id=?;");
    $resultado = $sentencia ->execute([$tipo, $codigo,$nombre,$cantidad, $precio,$sucursal, $id]);
    if ($resultado===TRUE) {
        header('location: inventario.php?mensaje=modificado');
    } else {
        header('location: inventario.php?mensaje=error');
        exit();
    }
    

?>