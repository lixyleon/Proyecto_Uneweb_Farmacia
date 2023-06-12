<?php 
    if(!isset($_GET['id'])){
        header('location: empleados.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM empleados WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: empleados.php?mensaje=eliminado');
    } else {
        header('location:empleados.php?mensaje=error');
    } 
    
?>