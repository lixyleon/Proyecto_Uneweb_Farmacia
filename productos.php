<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); ?>
<br>

<div class="card-group">
  <div class="card m-2">
     <div class="card-body">
      <h5 class="card-title">Consulta Médica</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 22 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
    </div>
  </div>
  <div class="card m-2">
    
    <div class="card-body">
      <h5 class="card-title">Venta y Alquiler de equipos médicos</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 23 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
    </div>
  </div>
  <div class="card m-2">
    
    <div class="card-body">
      <h5 class="card-title">Cuidamos tu salud visual</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 24 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
    </div>
  </div>
  <div class="card m-2">
    
    <div class="card-body">
      <h5 class="card-title">Te lo llevamos a tu casa</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 25 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
    </div>
  </div>
</div>

  <br>







<?php include("template/pie_pagina.php"); ?>