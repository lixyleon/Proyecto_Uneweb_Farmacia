<!doctype html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<?php 
    $url="http://".$_SERVER['HTTP_HOST']."/Proyecto_Uneweb_Farmacia"
?>
<nav class="navbar navbar-expand navbar-dark bg-danger p-4">
    <div class="nav navbar-nav ">
        <a class="nav-item nav-link active" href="#" aria-current="page">Logo <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/inicio.php"; ?> ">Inicio</a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/crud_productos/inventario.php"; ?>">Inventario</a>
        
        <a class="nav-item nav-link" href="#">Registro de ventas y pagos</a>
        <a class="nav-item nav-link" href="#">Sucursales</a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/crud_proveedores/proveedores.php"; ?> ">Proveedores</a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/usuarios.php"; ?>"> Usuarios del sistema</a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/crud_empleados/empleados.php"; ?>"> Empleados</a>

        <a class="nav-item nav-link" href="<?php echo $url; ?> ">Ver Sitio Web</a>
        <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/cerrar.php"; ?>">Cerrar Sesión</a>
     
    </div>
</nav>

<body>
    <div>
        
        <div>