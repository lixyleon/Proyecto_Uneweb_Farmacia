<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); ?>


<div class="container-fluid py-3 text-center">
  <h1 class="display-5 fw-bold text-primary">Nosotros</h1>
  <p class="fs-4">Somos un equipo dedicado al servicio de la salud. 
    Iniciamos en el año 2021 y hemos crecido rápidamente, por dar un servicio de alta calidad</p>
  
</div>

<h2 class="m-4">Nuestro equipo</h2>
<div class="container-fluid container-slider">
  <input type="radio" name="dot" id="one">
  <input type="radio" name="dot" id="two">
  <div class="button button-slider">
    <label for="one" class=" active one"></label>
    <label for="two" class="two"></label>
  </div>
  <div class="main-card main-card-slider">
    <div class="cards cards-slider ">
      <div class="card card-slider bg-primary">
        <div class="content content-slider">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 26 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name text-white">Directores</div>
            <div class="job text-white">Directores Ejecutivos</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="card card-slider">
        <div class="content content-slider">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 27 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name">Jasmine Carter</div>
            <div class="job">UI Designer</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="card card-slider">
        <div class="content content-slider">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 28 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name">Justin Chung</div>
            <div class="job">Web Devloper</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="cards cards-slider">
      <div class="card card-slider">
        <div class="content content-slider">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 29 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name">Jennifer Reef</div>
            <div class="job">Web Designer</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="card card-slider">
        <div class="content content-slider">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 30 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name">Adrina Calvo</div>
            <div class="job">UI Designer</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="card card-slider bg-primary">
        <div class="content content-slider ">
          <div class="img img-slider">
          <?php
        $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 31 ");
        $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($filas as $fila) { ?>
          <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="card-img-top m-2" alt="...">
        <?php
        }
      
        ?>
          </div>
          <div class="details">
            <div class="name text-white">Federico Lewis</div>
            <div class="job text-white">Web Devloper</div>
          </div>
          <div class="media-icons">
            <a id="icons-slider" href="#"><i class="bi bi-facebook"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-twitter"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-instagram"></i></a>
            <a id="icons-slider" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<?php include("template/pie_pagina.php"); ?>