<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); ?>


<div class="container-fluid py-3 text-center">
    <h1 class="display-5 fw-bold text-primary">Nosotros</h1>
    <p class="fs-4">Somos un equipo dedicado al servicio de la salud.
        Iniciamos en el año 2021 y hemos crecido rápidamente, por dar un servicio de alta calidad</p>

</div>

<h2 class="m-4">Nuestro equipo</h2>

<div class="container-fluid d-flex m-2">
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 26 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Junta Directiva</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim reprehenderit perspiciatis sit inventore error corporis. Cumque perferendis labore accusamus maxime.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 27 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lorena Garcia</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim reprehenderit perspiciatis sit inventore error corporis. Cumque perferendis labore accusamus maxime.</p>
                    <p class="card-text"><small class="text-body-secondary">Ejecutiva de Ventas</small></p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid d-flex m-2">
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 28 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Pedro Sánchez</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim repre</p>
                    <p class="card-text"><small class="text-body-secondary">Farmacéutico</small></p>

                </div>
            </div>
        </div>
    </div>
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 29 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Jessica López</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim reprehenderit perspiciatis sit inventore error corporis. Cumque perferendis labore accusamus maxime.</p>
                    <p class="card-text"><small class="text-body-secondary">Ejecutiva de Atención al cliente</small></p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid d-flex m-2">
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 30 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Ruth Aponte</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim repre</p>
                    <p class="card-text"><small class="text-body-secondary">Ejecutiva de Envíos</small></p>

                </div>
            </div>
        </div>
    </div>
    <div class="card m-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <?php
                $sentencia = $conexion->query("SELECT * FROM ofertas WHERE id = 31 ");
                $filas = $sentencia->fetchAll(PDO::FETCH_OBJ);
                foreach ($filas as $fila) { ?>
                    <img src="administrador/seccion/crud_imagenes/<?php echo $fila->image;  ?>" class="img-fluid rounded-start" alt="...">
                <?php
                }

                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Jonathan Guerrero</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia aut nesciunt eligendi magni quod inventore consequuntur harum libero? Enim reprehenderit perspiciatis sit inventore error corporis. Cumque perferendis labore accusamus maxime.</p>
                    <p class="card-text"><small class="text-body-secondary">Ejecutivo de Comunicaciones</small></p>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include("template/pie_pagina.php"); ?>