<?php

print_r($_POST);
if(!isset($_POST['id'])){
    header('location: ventas.php?mensaje=error');
}

include("../../config/bd.php");
$id=$_POST['id'];
$nombre=$_POST['txtNombreCli'];
$apellido=$_POST['txtApellidoCli'];
$tipopersona=$_POST['txtTipoCli'];
$numidentif=$_POST['txtNumCli'];
$fecha=$_POST['txtFecha'];
$monto=$_POST['txtMonto'];
$factura=$_POST['txtFactura'];
$sucursal=$_POST['txtSucursal'];

$sentencia=$conexion->prepare("UPDATE ventas SET nombre_cliente=?, apellido_cliente=?, id_tipo_persona=?, num_identificacion=?, fecha=?, monto=?, num_factura=?, id_sucursal=? WHERE id=?;");
$resultado = $sentencia ->execute([$nombre,$apellido,$tipopersona,$numidentif,$fecha,$monto,$factura,$sucursal, $id]);

if ($resultado===TRUE) {
    header('location: ventas.php?mensaje=modificado');
} else {
    header('location: ventas.php?mensaje=error');
    exit();
}

    
    

?>
 
 
