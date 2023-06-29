<?php

print_r($_POST);
if(!isset($_POST['id'])){
    header('location: pagos.php?mensaje=error');
}

include("../../config/bd.php");
$id=$_POST['id'];
$sucursal=$_POST['txtSucursal'];
$fecha=$_POST['txtFecha'];
$factura=$_POST['txtFactura'];
$monto=$_POST['txtMonto'];
$proveedor=$_POST['txtProveedor'];

$sentencia=$conexion->prepare("UPDATE pagos SET id_sucursal=?,fecha=?,num_factura=?,monto_operacion=?,id_proveedor=? WHERE id=?;");
$resultado = $sentencia ->execute([$sucursal,$fecha,$factura,$monto,$proveedor,$id]);

if ($resultado===TRUE) {
    header('location: pagos.php?mensaje=modificado');
} else {
    header('location: pagos.php?mensaje=error');
    exit();
}

    
    

?>
 
 
