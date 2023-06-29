<?php include("../../template/cabecera.php"); ?>

<?php

if (!isset($_GET['id'])) {
    header('location: ventas.php?mensaje=error');
    exit();
}

include("../../config/bd.php");
$id = $_GET['id'];

$sentencia = $conexion->prepare("SELECT * FROM pagos WHERE id=?;");
$sentencia->execute([$id]);
$pago = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($venta);

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
                        <div class="mb-3">
                        <label class="form-label">Fecha (Mes/Dia/Año):</label>
                        <input type="date" class="form-control" name="txtFecha" autofocus require value="<?php echo $pago->fecha; ?>">
                    </div>
                    <div class="mb-3">
                            <label class="form-label">Numero de Factura:</label>
                        </div>
                        <input type="number" class="form-control" name="txtFactura" autofocus require value="<?php echo $pago->num_factura; ?>">   
                        <div class="mb-3">
                            <label class="form-label">Monto:</label>
                        </div>
                        <input type="float" class="form-control" name="txtMonto" autofocus require value="<?php echo $pago->monto_operacion; ?>">
                       
                        <div class="mb-3">
                        <label class="form-label">Proveedor:</label>
                        <select name="txtProveedor" id="txtProveedor" require>
                            <option value="">Proveedor</option>
                            <?php
                            $sentencia4 = $conexion->query("SELECT * FROM proveedores");
                            $rows = $sentencia4->fetchAll(PDO::FETCH_OBJ);
                            foreach ($rows as $row) {  ?>
                                <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                            <?php
                            }
                            ?>

                        </select>
                    </div>

                        <div class="d-grid">
                            <input type="hidden" name="id" value="<?php echo $pago->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("../../template/pie.php"); ?>