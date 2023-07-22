<?php
include("../../config/bd.php");

if (!isset($_GET['id'])) {
    header('location: index.php?mensaje=error');
    exit();
}

$id = $_GET['id'];
$sentencia = $conexion->prepare("SELECT * FROM ofertas WHERE id=?;");
$sentencia->execute([$id]);
$ofertas = $sentencia->fetch(PDO::FETCH_OBJ);

include("../../template/cabecera.php");
?>

<div class="row m-3">
    <div class="col-md-4">
        <!-- Mensajes-->


        <h3 class="text-center">Registrar productos en ofertas</h3>
        <div class="card card-body">
            <form action="editarproceso.php" name="editarimage" method="POST" enctype="multipart/form-data">

                <div class="form-group mb-3">
                    <input type="text" name="title" class="form-control" value="<?php echo $ofertas->title; ?>" placeholder="Title" autofocus>
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" row="2" class="form-control"><?php echo $ofertas->description; ?></textarea>
                </div>
                <div class="form-group mb-1">
                    <input type="file" name="image" class="form-control">
                    
                            <img src="<?php echo $ofertas->image; ?>" class="card-img-top" alt="...">
                      
                </div>
                <input type="hidden" name="id" value="<?php echo $ofertas->id;?>">
                <input type="submit" name="editar-imagen" value="Editar imagen" class="btn btn-dark w-100 btn-block">
            </form>
        </div>
    </div>
    <div class="col-md-7">
        
    </div>
</div>
 <br>
 <br>
 

<?php include("../../template/pie.php"); ?>
  

