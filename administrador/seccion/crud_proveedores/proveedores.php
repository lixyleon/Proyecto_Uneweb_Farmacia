<?php include("../../template/cabecera.php"); ?>

<?php

include("../../config/bd.php");

$sentencia = $conexion->query("SELECT * FROM proveedores");
$listaproveedor = $sentencia->fetchAll(PDO::FETCH_OBJ);

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

            <div class="card d-none d-md-block ">
                <div class="card header">
                    <h2 class="text-center"> Lista de Proveedores </h2>
                </div>
            </div>
            <div class="p-4">
                <div class="table-responsive aling-middle table-bordered d-none d-md-block">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">tipo de cedula</th>
                                <th scope="col">Numero de identificación</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaproveedor as $proveedor) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $proveedor->id; ?></td>
                                    <td><?php echo $proveedor->nombre; ?></td>
                                    <td><?php echo $proveedor->apellido; ?></td>
                                    <td><?php echo $proveedor->telefono; ?></td>
                                    <td>
                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM tipo_persona WHERE id = $proveedor->id_tipo_persona ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $proveedor->num_identificacion; ?></td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $proveedor->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php ?id=<?php echo $proveedor->id; ?>"><i class=" bi bi-trash"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
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
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombreProv" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="txtApellidoProv" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="txtTelefonoProv" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de cédula</label>
                        <select name="txtTipoProv" id="txtTipoProv" require>
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
                        <label class="form-label">Numero de identificación:</label>
                        <input type="number" class="form-control" name="txtNumProv" autofocus require>
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




<?php include("../../template/pie.php"); ?>