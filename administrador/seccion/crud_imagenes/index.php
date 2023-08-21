<?php
 include("../../template/cabecera.php");
include("../../config/bd.php");

$sentencia = $conexion->query("SELECT * FROM ofertas");
$listaofertas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>




    <div class="row m-3">
        <div class="col-md-4">
   
            <h3 class="text-center mt-3">Registrar productos en ofertas</h3>
            <div class="card card-body">
                <form action="save_image.php" name="subida-imagenes" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="description" row="2" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-1">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <input type="submit" name="subir-imagen" value="Enviar imagen" class="btn btn-dark w-100 btn-block">
                </form>
            </div>

        </div>
       <div class="col-md-7 mb-4">
        <div class="table-responsive aling-middle table-bordered d-none d-md-block">
            <h3 class="m-3 text-center">Imagenes cargadas</h3>
                    <table class="table table-striped">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Ruta</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaofertas as $oferta) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $oferta->id; ?></td>
                                    <td><?php echo $oferta->title; ?></td>
                                    <td><?php echo $oferta->description; ?></td>
                                    <td><?php echo $oferta->image; ?></td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $oferta->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
        </div>
    </div>
 
  
<br>
<br>









  <?php include("../../template/pie.php"); ?>