<?php
include("template/cabecera.php");
include("config/bd.php");
$url = "http://" . $_SERVER['HTTP_HOST'] . "/Proyecto_Uneweb_Farmacia"

?>

<div class="col-md-12">
  <div class=" mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold text-danger">Bienvenid@</h1>
      <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quos ducimus vitae exercitationem quaerat quas aliquid obcaecati beatae sunt? Reiciendis ut quibusdam at placeat odio officia aperiam incidunt itaque nulla!.</p>
    </div>
  </div>
  <h2 class="m-2">Administración de Tablas</h2>
  <div class="col d-flex card-group">
     <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem;">
        <div class="card-header fs-4">Inventario</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza el Inventario</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn btn-dark w-100">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_productos/inventario.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem; background-color: #efdff7;">
        <div class="card-header fs-4">Ventas</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza las Ventas</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn w-100" style="background-color:  #4c6e81;">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_ventas/ventas.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem; background-color:   #f4a0fa;">
        <div class="card-header fs-4">Pagos</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza los Pagos</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn w-100" style="background-color:   #aa5377 ;">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_pagos/pagos.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col d-flex card-group">
  
     <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem; background-color:#eaecee;">
        <div class="card-header fs-4">Empleados</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza la Tabla Empleados</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn btn-info w-100">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_empleados/empleados.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem; background-color: #efdff7;">
        <div class="card-header fs-4">Proveedores</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza los Proveedores</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn w-100" style="background-color:  #8929e8;">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_proveedores/proveedores.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-secondary m-3" style="max-width: 18rem; background-color:  #aef784;">
        <div class="card-header fs-4">Imagenes</div>
        <div class="card-body">
          <h5 class="card-title">Actualiza los Imagenes</h5>
          <p class="card-text">Crea, Lee, Modifica y Borra registros .</p>
          <button type="button" class="btn w-100" style="background-color:   #45b604 ;">
                    <a class="text-white " href="<?php echo $url . "/administrador/seccion/crud_imagenes/index.php"; ?>">Ir</a>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
  <div class=" mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold text-danger">Soporte Técnico</h1>
      <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quos ducimus vitae exercitationem quaerat quas aliquid obcaecati beatae sunt? Reiciendis ut quibusdam at placeat odio officia aperiam incidunt itaque nulla!.</p>
    </div>
  </div>
<br>
<br>
  <?php
  include("template/pie.php");
  ?>