<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header('location: index.php?mensaje=falta');
    exit();
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/Proyecto_Uneweb_Farmacia"
?>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-pulse-fill text-white" viewBox="0 0 16 16">
            <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475Z" />
            <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z" />
        </svg>
        <p>
        <h2 class="text-white"> <strong>Administrador FarmaSalud</strong> </h2>
        </p>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Componentes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $url . "/administrador/inicio.php"; ?> ">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url . "/administrador/seccion/crud_imagenes/index.php"; ?>">Imagenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="<?php echo $url . "/administrador/seccion/reportes/index.php"; ?>">Reportes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tablas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/crud_productos/inventario.php"; ?>">Inventario</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/crud_proveedores/proveedores.php"; ?> ">Proveedores</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/crud_empleados/empleados.php"; ?>">Empleados</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/crud_ventas/ventas.php"; ?>">Registro de ventas</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/crud_pagos/pagos.php"; ?>">Registro de pagos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url . "/administrador/cerrarSesion.php"; ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br>
<br>

<body>
    <div>
        <div>