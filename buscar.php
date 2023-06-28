<?php include("template/cabecera.php");

include("administrador/config/bd.php");

$busqueda = (!empty($_POST['busqueda'])) ? $_POST['busqueda'] : '';
$query = "SELECT * FROM inventario WHERE nombre LIKE '%$busqueda%'";
$sentencia = $conexion->query($query);
$listaproducto = $sentencia->fetchAll(PDO::FETCH_OBJ);
$row = count($listaproducto);
//echo $row;
?>

<h1 class="text-center text-primary m-2">Consulta tus productos</h1>
<form class="d-flex m-4" role="search" method="POST">
    <input class="form-control me-2" type="search" id="search" placeholder="Buscar" name="busqueda" aria-label="Buscar" require>
    <button class="btn btn-outline-primary" type="submit">Buscar</button>
</form>

<div class="container-fluid">
<?php if ( isset($_POST['busqueda']) & $row>0 ) {?>
      <table class="table  table-responsive table-striped">
       <tr class="table-primary">
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Sucursal</th>
        </tr>
        <?php   foreach ($listaproducto as $producto) {?>
            <tr class="table-primary">
                <td><?php echo $producto->nombre; ?></td>
                <td><?php echo $producto->cantidad; ?></td>
                <td><?php echo $producto->precio; ?></td>
                <td>
                    <?php 
                    $sentencia3 = $conexion->query("SELECT * FROM sucursales WHERE id = $producto->id_sucursal ");
                    $filas = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                    foreach ($filas as $fila) {
                        echo ($fila -> nombre);
                    }
  
                    ?>
            
            </td>
            </tr>
        <?php }
        echo "</table>";
     } else {?>
            <div class = "container-fluid m-3 text-center fs-4">
            No se encontraron resultados
            </div>
<?php  } ?>
</div>



<?php include("template/pie_pagina.php"); ?>












