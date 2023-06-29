<?php 
    if(!isset($_GET['id'])){
        header('location: pagos.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM pagos WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: pagos.php?mensaje=eliminado');
    } else {
        header('location:pagos.php?mensaje=error');
    } 
    
?>