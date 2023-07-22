<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); ?>


<div class="row row-cols-1 row-cols-md-3 g-4 m-4">
  <div class="col">
    <div class="card">
    <?php
        $sentencia1 = $conexion->query("SELECT * FROM ofertas WHERE id = 19 ");
        $filas = $sentencia1->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" width="100" height="400" alt="...">
        <?php
        }
      
        ?>
      <div class="card-body">
        <h5 class="card-title">La Florida</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <?php
        $sentencia1 = $conexion->query("SELECT * FROM ofertas WHERE id = 21 ");
        $filas = $sentencia1->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" width="100" height="400" alt="...">
        <?php
        }
      
        ?>
      <div class="card-body">
        <h5 class="card-title">Altamira</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <?php
        $sentencia1 = $conexion->query("SELECT * FROM ofertas WHERE id = 20 ");
        $filas = $sentencia1->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" width="100" height="400" alt="...">
        <?php
        }
      
        ?>
      <div class="card-body">
        <h5 class="card-title">Los Chaguramos</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  </div>





<?php include("template/pie_pagina.php"); ?>