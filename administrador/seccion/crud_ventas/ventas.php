<?php include("../../template/cabecera.php"); ?>

<?php

include("../../config/bd.php");

$sentencia = $conexion->query("SELECT * FROM ventas");
$listaventas = $sentencia->fetchAll(PDO::FETCH_OBJ);



?>

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- inicio alerta-->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Debes colocar todos los datos
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  } ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>

                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Registrado satisfactoriamente</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Vuelve a intentar
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'modificado') {
            ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Registro modificado</strong> satisfactoriamente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Registro eliminado</strong> satisfactoriamente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <!-- fin alerta-->

            <div class="card d-none d-md-block">
                <div class="card header">
                    <h2 class="text-center"> Ventas </h2>
                </div>
            </div>
            <div class="p-4">
                <div class="table-responsive aling-middle table-bordered d-none d-md-block" >
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">tipo de cedula</th>
                                <th scope="col">Numero de identificación</th>
                                <th scope="col">fecha</th>
                                <th scope="col">monto</th>
                                <th scope="col">num_factura</th>
                                <th scope="col">sucursal</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaventas as $venta) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $venta->id; ?></td>
                                    <td><?php echo $venta->nombre_cliente; ?></td>
                                    <td><?php echo $venta->apellido_cliente; ?></td>
                                    <td>
                                    <?php
                                        $sentencia5 = $conexion->query("SELECT * FROM tipo_persona WHERE id = $venta->id_tipo_persona");
                                        $rows = $sentencia5->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $venta->num_identificacion; ?></td>
                                    <td><?php echo $venta->fecha; ?></td>
                                    <td><?php echo $venta->monto; ?></td>
                                    <td><?php echo $venta->num_factura; ?></td>
                                    <td>
                                    <?php
                                        $sentencia6 = $conexion->query("SELECT * FROM sucursales WHERE id = $venta->id_sucursal");
                                        $rows = $sentencia6->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>
                                    </td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $venta->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php ?id=<?php echo $venta->id; ?>"><i class=" bi bi-trash"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card header">
                    <h2 class="text-center"> Ingresar datos: </h2>
                </div>
                <form action="registrar.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Cliente:</label>
                        <input type="text" class="form-control" name="txtNombreCli" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido del Cliente:</label>
                        <input type="text" class="form-control" name="txtApellidoCli" autofocus require>
                    </div>
                     <div class="mb-3">
                        <label class="form-label">Tipo de cédula</label>
                        <select name="txtTipoCli" id="txtTipoCli" require>
                        <option value="">Tipo de cédula</option>
                        <?php 
                        $sentencia4 = $conexion->query("SELECT * FROM tipo_persona");
                        $filas = $sentencia4->fetchAll(PDO::FETCH_OBJ);
                        foreach($filas as $fila) {  ?>
                            <option value="<?php print($fila -> id); ?>"><?php print($fila -> nombre); ?></option>;
                       
                        <?php
                        }
                        ?>
                         </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero de identificación del cliente:</label>
                        <input type="number" class="form-control" name="txtNumCli" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha (Mes/Dia/Año):</label>
                        <input type="date" class="form-control" name="txtFecha" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Monto:</label>
                        <input type="float" class="form-control" name="txtMonto" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero de la factura:</label>
                        <input type="number" class="form-control" name="txtFactura" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sucursal:</label>
                        <select name="txtSucursal" id="txtSucursal" require>
                        <option value="">Sucursal</option>
                        <?php 
                        $sentencia3 = $conexion->query("SELECT * FROM sucursales");
                        $filas = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                        foreach($filas as $fila) {  ?>
                            <option value="<?php print($fila -> id); ?>"><?php print($fila -> nombre); ?></option>;
                       
                        <?php
                        }
                        ?>

                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-dark" value="registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<br>


<?php include("../../template/pie.php"); ?>