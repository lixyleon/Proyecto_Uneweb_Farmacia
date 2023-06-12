<?php include("../../template/cabecera.php"); ?>

<?php

if (!isset($_GET['id'])) {
    header('location: empleados.php?mensaje=error');
    exit();
}

include("../../config/bd.php");
$id = $_GET['id'];

$sentencia = $conexion->prepare("SELECT * FROM empleados WHERE id=?;");
$sentencia->execute([$id]);
$empleado = $sentencia->fetch(PDO::FETCH_OBJ);
 //print_r($empleado);

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
                        <input type="text" class="form-control" name="txtNombreEmpl" autofocus require value="<?php echo $empleado->nombre;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="txtApellidoEmpl" autofocus require value="<?php echo $empleado->apellido;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="txtTelefonoEmpl" autofocus require value="<?php echo $empleado->telefono;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de cédula</label>
                        <select name="txtTipoEmpl" id="txtTipoEmpl" require>
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
                    </div>
                    <input type="number" class="form-control" name="txtNumEmpl" autofocus require value="<?php echo $empleado->num_identificacion;?>">
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
                            <input type="hidden" name="id" value="<?php echo $empleado->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("../../template/pie.php"); ?>