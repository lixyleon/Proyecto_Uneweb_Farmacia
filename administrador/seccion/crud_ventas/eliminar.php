<?php 
    if(!isset($_GET['id'])){
        header('location: ventas.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM ventas WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: ventas.php?mensaje=eliminado');
    } else {
        header('location:ventas.php?mensaje=error');
    } 
    
?>