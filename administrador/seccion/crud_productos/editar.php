<?php include("../../template/cabecera.php");?>

<?php

    if(!isset($_GET['id'])){
        header('location: inventario.php?mensaje=error');
        exit();
    } 

    include("../../config/bd.php");
    $id=$_GET['id'];

    $sentencia = $conexion->prepare("SELECT * FROM inventario WHERE id=?;");
    $sentencia ->execute([$id]);
    $producto = $sentencia->fetch(PDO::FETCH_OBJ);
   // print_r($inventario);

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
                        <label class="form-label">Tipo:</label>
                        <input type="text" class="form-control" name="txtTipo"  require value="<?php echo $producto-> id_tipo_producto;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Codigo:</label>
                        <input type="text" class="form-control" name="txtCodigo"  require value="<?php echo $producto->codigo;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre"  require value="<?php echo $producto->nombre;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cantidad:</label>
                        <input type="number" class="form-control" name="txtCantidad"  require value="<?php echo $producto->cantidad;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio:</label>
                        <input type="float" class="form-control" name="txtPrecio"  require value="<?php echo $producto->precio;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sucursal:</label>
                        <input type="text" class="form-control" name="txtSucursal"  require value="<?php echo $producto->id_sucursal;?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $producto->id;?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("../../template/pie.php");?>