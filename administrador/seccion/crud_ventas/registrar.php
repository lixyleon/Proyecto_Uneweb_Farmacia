<?php  
  print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtNombreCli'] ) || empty($_POST['txtApellidoCli'] ) || empty($_POST['txtTipoCli'] )|| empty($_POST['txtNumCli'] ) || empty($_POST['txtFecha'] )|| empty($_POST['txtMonto'] ) || empty($_POST['txtFactura'] )|| empty($_POST['txtSucursal'] )) {
        header('location: ventas.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $nombre=$_POST['txtNombreCli'];
    $apellido=$_POST['txtApellidoCli'];
    $tipopersona=$_POST['txtTipoCli'];
    $numidentif=$_POST['txtNumCli'];
    $fecha=$_POST['txtFecha'];
    $monto=$_POST['txtMonto'];
    $factura=$_POST['txtFactura'];
    $sucursal=$_POST['txtSucursal'];
    

    $sentencia = $conexion ->prepare("INSERT INTO ventas (nombre_cliente,apellido_cliente,id_tipo_persona,num_identificacion,fecha,monto,num_factura,id_sucursal) VALUES(?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$tipopersona,$numidentif,$fecha,$monto,$factura,$sucursal]);
    if ($resultado ===TRUE) {
       header('location: ventas.php?mensaje=registrado');
    } else {
        header('location: ventas.php?mensaje=error');
        exit();
    }
    


?>

