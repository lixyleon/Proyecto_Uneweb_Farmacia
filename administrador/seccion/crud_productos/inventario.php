<?php include("../../template/cabecera.php"); ?>

<?php

include("../../config/bd.php");

$sentencia = $conexion->query("SELECT * FROM inventario");
$listaproducto = $sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($listaproducto);

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
                    <h2 class="text-center"> Lista de productos </h2>
                </div>
            </div>
            <div class="p-4">
                <div class="table-responsive aling-middle table-bordered d-none d-md-block">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Sucursal</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaproducto as $producto) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $producto->id; ?></td>
                                    <td>
                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM tipo_producto WHERE id = $producto->id_tipo_producto ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->categoria);
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $producto->codigo; ?></td>
                                    <td><?php echo $producto->nombre; ?></td>
                                    <td><?php echo $producto->cantidad; ?></td>
                                    <td><?php echo $producto->precio; ?></td>
                                    <td>
                                    <?php
                                        $sentencia3 = $conexion->query("SELECT * FROM sucursales WHERE id = $producto->id_sucursal ");
                                        $filas = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($filas as $fila) {
                                            echo ($fila->nombre);
                                        }

                                        ?>
                                
                                    </td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $producto->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php ?id=<?php echo $producto->id; ?>"><i class=" bi bi-trash"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card header">
                    <h2 class="text-center"> Ingresar datos: </h2>
                </div>
                <form action="registrar.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Tipo:</label>
                        <select name="txtTipo" id="txtTipo" require>
                            <option value="">Tipo de producto</option>
                            <?php
                            $sentencia2 = $conexion->query("SELECT * FROM tipo_producto");
                            $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                            foreach ($rows as $row) {  ?>
                                <option value="<?php print($row->id); ?>"><?php print($row->categoria); ?></option>;

                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Codigo:</label>
                        <input type="text" class="form-control" name="txtCodigo" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cantidad:</label>
                        <input type="number" class="form-control" name="txtCantidad" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio:</label>
                        <input type="text" class="form-control" name="txtPrecio" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sucursal:</label>
                        <select name="txtSucursal" id="txtSucursal" require>
                            <option value="">Sucursal</option>
                            <?php
                            $sentencia3 = $conexion->query("SELECT * FROM sucursales");
                            $filas = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                            foreach ($filas as $fila) {  ?>
                                <option value="<?php print($fila->id); ?>"><?php print($fila->nombre); ?></option>;

                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-dark" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include("../../template/pie.php"); ?>