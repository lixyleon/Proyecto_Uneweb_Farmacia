<?php include("../../template/cabecera.php"); ?>

<?php

if (!isset($_GET['id'])) {
    header('location: proveedores.php?mensaje=error');
    exit();
}

include("../../config/bd.php");
$id = $_GET['id'];

$sentencia = $conexion->prepare("SELECT * FROM proveedores WHERE id=?;");
$sentencia->execute([$id]);
$proveedor = $sentencia->fetch(PDO::FETCH_OBJ);
// print_r($proveedor);

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card header">
                    Editar datos:
                </div>
                <form action="editarproceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombreProv" autofocus require value="<?php echo $proveedor->nombre;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="txtApellidoProv" autofocus require value="<?php echo $proveedor->apellido;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="txtTelefonoProv" autofocus require value="<?php echo $proveedor->telefono;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de cédula</label>
                        <select name="txtTipoProv" id="txtTipoProv" require>
                            <option value="">Tipo de cédula</option>
                            <?php
                            $sentencia4 = $conexion->query("SELECT * FROM tipo_persona");
                            $filas = $sentencia4->fetchAll(PDO::FETCH_OBJ);
                            foreach ($filas as $fila) {  ?>
                                <option value="<?php print($fila->id); ?>"><?php print($fila->nombre); ?></option>;

                            <?php
                            }
                            ?>

                        </select>
                        <div class="mb-3">
                            <label class="form-label">Numero de identificación:</label>
                            <input type="number" class="form-control" name="txtNumProv" autofocus require value="<?php echo $proveedor->num_identificacion;?>">
                    </div>
                        <div class="d-grid">
                            <input type="hidden" name="id" value="<?php echo $proveedor->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("../../template/pie.php"); ?>