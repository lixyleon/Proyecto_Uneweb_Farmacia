<?php include("template/cabecera.php");

include("administrador/config/bd.php");

$busqueda = (!empty($_POST['busqueda'])) ? $_POST['busqueda'] : '';

//consultas

$query = "SELECT * FROM inventario WHERE nombre LIKE '%$busqueda%'";
$sentencia = $conexion->query($query);
$num_rows = count($sentencia->fetch(PDO::FETCH_ASSOC));


?>


<h1 class="text-center text-primary m-2">Consulta tus productos</h1>


<form class="d-flex m-2" role="search" method="POST">
    <input class="form-control me-2" type="search" id="search" placeholder="Buscar" name="busqueda" aria-label="Buscar" require>
    <button class="btn btn-outline-primary" type="submit">Buscar</button>
</form>

<div class="container-fluid">
    <?php

    if ($busqueda != '') {
        echo '<table class="table  table-responsive table-striped m-2">';
        if ($num_rows > 1) {
            echo '<tr class="table-primary"><th>Nombre</th><th>Cantidad</th><th>Precio</th><th>Sucursal</th></tr>';
            while ($data = $sentencia->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr class="table-primary">';
                echo "<td>" . $data["nombre"] . "</td>";
                echo "<td>" . $data["cantidad"] . "</td>";
                echo "<td>" . $data["precio"] . "</td>";
                echo "<td>" . $data["id_sucursal"] . "</td></tr>";
                
            }
            echo "</table>";
        } else {
            echo "<div>No se encontraron resultados</div>";
        }
    }


    ?>
</div>




<div class="container-fluid">
    
</div>
<br>


<?php include("template/pie_pagina.php"); ?>
