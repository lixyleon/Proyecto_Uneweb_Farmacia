<?php 
    if(!isset($_GET['id'])){
        header('location: proveedores.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM proveedores WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: proveedores.php?mensaje=eliminado');
    } else {
        header('location: proveedores.php?mensaje=error');
    } 
    
?>