<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); ?>

<div class="container-fluid p-4  ">
  <div class="card mb-3">
    <div class="row g-0 ">
      <div class="col-md-4">
        <?php
        $sentencia1 = $conexion->query("SELECT * FROM ofertas WHERE id = 12 ");
        $filas = $sentencia1->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" width="100" height="400" alt="...">
        <?php
        }
      
        ?>
      </div>
      <div class="col-md-8 gradient">
        <div class="card-body">
          <h1 class="card-title text-center text-primary">Te esperamos en Farmasalud
            <br>
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-heart-pulse-fill text-primary" viewBox="0 0 16 16">
              <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475Z" />
              <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z" />
            </svg>
          </h1>
          <p class="text-center lead fs-4"> Con la mejor atención, productos y servicios en todas nuestras tiendas</p>
          <p class="card-text"><small class="text-body-secondary"></small></p>
        </div>
      </div>
    </div>
  </div>

</div>
<section id="ofertas">

  <div class="container-fluid text-center ">
    <h1 class="text-primary">Ofertas destacadas</h1>
    <p class="mt-3">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia qui a inventore sit ea sequi dolorum vel eum, ex ut accusantium, itaque cum enim reiciendis numquam cupiditate quaerat expedita porro.
    </p>

  </div>

  <div class="container-fluid">

    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 13 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center fs-3"><?php echo $fila->title;  ?></h5>
            <p class="card-text"><?php echo $fila->description;  ?></p>
          </div>
          <div class="mb-5 d-flex justify-content-around">
            <h3 class="text-primary fs-3">30% de Descuento</h3>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 14 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center fs-3">Crema Ponds</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
              dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around gradient">
            <h3 class="text-primary fs-3">40% de Descuento</h3>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 15 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center fs-3">Pañal</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
              dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around gradient">
            <h3 class="text-primary fs-3">25% de Descuento</h3>

          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 16 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2 " alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center fs-3">Protector</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
              dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around gradient">
            <h3 class="text-primary fs-3">25% de Descuento</h3>

          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 17 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2 " alt="...">
        <?php
        }
      
        ?>
          </div>

          <div class="card-body">
            <h5 class="card-title text-center fs-3">Shampoo</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
              dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around gradient">
            <h3 class="text-primary fs-3">30% de descuento</h3>

          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="card-container">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 18 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" width="100" height="400" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center fs-3">Equipos médicos</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
              dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around gradient">
            <h3 class="text-primary fs-3">10$ de descuento</h3>

          </div>
        </div>
      </div>


    </div>
  </div>

</section>

<section id="servicios">
  <div class="container text-center">
    <div class="row mb-5">
      <div class="col">
        <h1 class="text-primary">Nuestros servicios</h1>
        <p class="mt-3">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia qui a inventore sit ea sequi dolorum vel eum, ex ut accusantium, itaque cum enim reiciendis numquam cupiditate quaerat expedita porro.
        </p>
      </div>
      <div>

      </div>
      <div class="row d-flex">
        <div class="col-md-3">
          <div class="card h-100 bg-secondary">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-truck img-fluid mb-3 text-primary" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
              </svg>
              <h3 class="text-center">Envíos</h3>
              <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aspernatur culpa deleniti sunt nihil dolore tempore, quae fugiat, error sed recusandae rem in, impedit qui cumque nisi quibusdam ipsam aliquam.</p>
              <button type="button" class="btn btn-primary">
                <a class="text-white" href="productos.php">Conoce más</a></button>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-heart-pulse img-fluid mb-3 text-primary" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z" />
                <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z" />
              </svg>
              <h3>Médico en línea</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aspernatur culpa deleniti sunt nihil dolore tempore, quae fugiat, error sed recusandae rem in, impedit qui cumque nisi quibusdam ipsam aliquam.</p>
              <button type="button" class="btn btn-primary">
                <a class="text-white" href="productos.php">Conoce más</a></button>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body">
              <img src="imagenes/Doctor_Medical_Instrument_Stethoscope_icon-icons.com_65902.svg" width="50" height="50" class="bi bi-heart-pulse img-fluid mb-3 text-primary" alt="">
              <h3>Equipos médicos</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aspernatur culpa deleniti sunt nihil dolore tempore, quae fugiat, error sed recusandae rem in, impedit qui cumque nisi quibusdam ipsam aliquam.</p>
              <button type="button" class="btn btn-primary">
                <a class="text-white" href="productos.php">Conoce más</a></button>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="card h-100 bg-secondary">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-eyeglasses img-fluid mb-3 text-primary" viewBox="0 0 16 16">
                <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
              </svg>
              <h3 class="text-center">Cuidamos tu salud visual</h3>
              <p class="">Lorem ipsum dolor sit amet consectetur. Officiis aspernatur culpa deleniti sunt nihil dolore tempore, quae fugiat, error sed recusandae rem in, impedit qui cumque nisi quibusdam ipsam aliquam.</p>
              <button type="button" class="btn btn-primary">
                <a class="text-white" href="productos.php">Conoce más</a></button>
            </div>
          </div>

        </div>

      </div>


    </div>


</section>
<?php include("template/pie_pagina.php"); ?>