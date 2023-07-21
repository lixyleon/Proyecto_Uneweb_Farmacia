<?php include("../../template/cabecera.php"); ?>

<?php

if (!isset($_GET['id'])) {
    header('location: ventas.php?mensaje=error');
    exit();
}

include("../../config/bd.php");
$id = $_GET['id'];

$sentencia = $conexion->prepare("SELECT * FROM ventas WHERE id=?;");
$sentencia->execute([$id]);
$venta = $sentencia->fetch(PDO::FETCH_OBJ);
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
                        <label class="form-label">Nombre del Cliente:</label>
                        <input type="text" class="form-control" name="txtNombreCli" autofocus require value="<?php echo $venta->nombre_cliente;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido del Cliente:</label>
                        <input type="text" class="form-control" name="txtApellidoCli" autofocus require value="<?php echo $venta->apellido_cliente;?>">
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
                        <label class="form-label">Numero de identificación del Cliente:</label>
                    </div>
                    <input type="number" class="form-control" name="txtNumCli" autofocus require value="<?php echo $venta->num_identificacion;?>">
                    <div class="mb-3">
                        <label class="form-label">Fecha:</label>
                    </div>
                    <input type="date" class="form-control" name="txtFecha" autofocus require value="<?php echo $venta->fecha;?>">
                    <div class="mb-3">
                        <label class="form-label">Monto:</label>
                    </div>
                    <input type="float" class="form-control" name="txtMonto" autofocus require value="<?php echo $venta->monto;?>">
                    <div class="mb-3">
                        <label class="form-label">Numero de Factura:</label>
                    </div>
                    <input type="number" class="form-control" name="txtFactura" autofocus require value="<?php echo $venta->num_factura;?>">
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
                            <input type="hidden" name="id" value="<?php echo $venta->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("../../template/pie.php"); ?>