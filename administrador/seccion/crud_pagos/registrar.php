<?php  
  print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtSucursal'] ) || empty($_POST['txtFecha'] ) || empty($_POST['txtFactura'] )|| empty($_POST['txtMonto'] ) || empty($_POST['txtProveedor'] )) {
        header('location: pagos.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $sucursal=$_POST['txtSucursal'];
    $fecha=$_POST['txtFecha'];
    $factura=$_POST['txtFactura'];
    $monto=$_POST['txtMonto'];
    $proveedor=$_POST['txtProveedor'];
    
    
    
    

    $sentencia = $conexion ->prepare("INSERT INTO pagos (id_sucursal,fecha,num_factura,monto_operacion,id_proveedor) VALUES(?,?,?,?,?);");
    $resultado = $sentencia->execute([$sucursal,$fecha,$factura,$monto,$proveedor]);
    if ($resultado ===TRUE) {
       header('location: pagos.php?mensaje=registrado');
    } else {
        header('location: pagos.php?mensaje=error');
        exit();
    }
    


?>

