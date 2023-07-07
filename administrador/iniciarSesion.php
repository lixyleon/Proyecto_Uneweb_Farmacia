<?php 

    session_start();
    include("config/bd.php");

    if(empty($_POST['usuario'] ) || empty($_POST['clave'] )) {
        header('location: index.php?mensaje=falta');
        exit();
    } 

  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    } 

    $usuario = validate($_POST['usuario']);
    $clave = ($_POST['clave']);
    
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave ='$clave'";
    $result = $conexion->query($sql);

   $row = $result-> fetch(PDO::FETCH_OBJ);
      
     if($row-> usuario===$usuario && $row -> clave===$clave){
            $_SESSION['usuario'] = $row-> usuario;
            $_SESSION['nombre'] = $row -> nombre;
            header('location:inicio.php');
            exit();
        }else{
            header('location:index.php?error=Usuario o contraseña incorrecto');
            exit();
        } 
    
       
?>