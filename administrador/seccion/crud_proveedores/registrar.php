<?php  
  print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtNombreProv'] ) || empty($_POST['txtApellidoProv'] ) || empty($_POST['txtTelefonoProv'] ) || empty($_POST['txtTipoProv'] )|| empty($_POST['txtNumProv'] ) ) {
        header('location: proveedores.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $nombre=$_POST['txtNombreProv'];
    $apellido=$_POST['txtApellidoProv'];
    $telefono=$_POST['txtTelefonoProv'];
    $tipopersona=$_POST['txtTipoProv'];
    $numidentif=$_POST['txtNumProv'];
    

    $sentencia = $conexion ->prepare("INSERT INTO proveedores (nombre,apellido,telefono,id_tipo_persona,num_identificacion) VALUES(?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$telefono,$tipopersona,$numidentif]);
    if ($resultado ===TRUE) {
       header('location: proveedores.php?mensaje=registrado');
    } else {
        header('location: proveedores.php?mensaje=error');
        exit();
    }
    


?>

