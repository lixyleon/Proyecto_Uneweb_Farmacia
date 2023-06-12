<?php  
  print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtNombreEmpl'] ) || empty($_POST['txtApellidoEmpl'] ) || empty($_POST['txtTelefonoEmpl'] ) || empty($_POST['txtTipoEmpl'] )|| empty($_POST['txtNumEmpl'] ) || empty($_POST['txtSucursal'] )) {
        header('location: empleados.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $nombre=$_POST['txtNombreEmpl'];
    $apellido=$_POST['txtApellidoEmpl'];
    $telefono=$_POST['txtTelefonoEmpl'];
    $tipopersona=$_POST['txtTipoEmpl'];
    $numidentif=$_POST['txtNumEmpl'];
    $sucursal=$_POST['txtSucursal'];
    

    $sentencia = $conexion ->prepare("INSERT INTO empleados (nombre,apellido,telefono,id_tipo_persona,num_identificacion,id_sucursal) VALUES(?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$telefono,$tipopersona,$numidentif,$sucursal]);
    if ($resultado ===TRUE) {
       header('location: empleados.php?mensaje=registrado');
    } else {
        header('location: empleados.php?mensaje=error');
        exit();
    }
    


?>

