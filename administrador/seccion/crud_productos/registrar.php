<?php  
    print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtTipo'] ) || empty($_POST['txtCodigo'] ) || empty($_POST['txtNombre'] ) || empty($_POST['txtCantidad'] )|| empty($_POST['txtPrecio'] ) || empty($_POST['txtSucursal'] )) {
        header('location: inventario.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $tipo=$_POST['txtTipo'];
    $codigo=$_POST['txtCodigo'];
    $nombre=$_POST['txtNombre'];
    $cantidad=$_POST['txtCantidad'];
    $precio=$_POST['txtPrecio'];
    $sucursal=$_POST['txtSucursal'];

    $sentencia = $conexion ->prepare("INSERT INTO inventario (id_tipo_producto,codigo,nombre, cantidad, precio,id_sucursal) VALUES(?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$tipo,$codigo,$nombre,$cantidad,$precio,$sucursal]);
    if ($resultado ===TRUE) {
       header('location: inventario.php?mensaje=registrado');
    } else {
        header('location: inventario.php?mensaje=error');
        exit();
    }
    


?>

