<?php include("../template/cabecera.php");
include("../config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios");
$sentenciaSQL->execute();
$listaUsuarios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div>
<h1 class="text-black text-center p-2">Registros de usuarios</h1>
    <form action="" class="d-flex">
        <div class="form-group p-1">
            <input type="text" placeholder="nombre">
        </div>
        <div class="form-group p-1">
             <input type="text"  placeholder="apellido">
        </div>
        <div class="form-group p-1">
            <input type="text"  placeholder="usuario">
        </div>
        <div class="form-group p-1">
            <input type="text"  placeholder="constraseña">
        </div>
        <div class="form-group p-1">
            <input type="text"  placeholder="email">
        </div>
        
       <div class="btn-group">
        <input type="submit" value="Agregar" class="btn btn-dark">
       </div>
      
    </form>
</div>



<div class="card-body">
    <h2 class="text-black text-center p-2">Usuarios registrados</h2>
    <table class="table p-2 table-bordered">
        <table>
            <thead>
               <tr>
                    <th> Id </th>
                    <th> Nombre </th>
                    <th> Apellido </th>
                    <th> Usuario </th>
                    <th> Contraseña </th>
                    <th> Email </th>
                </tr>
            </thead>

            <body>
                <?php foreach ($listaUsuarios as $usuario) {?>

                <tr>
                    <th> <? $usuario['id']  ?></th>
                    <th><? $usuario['nombre']  ?></th>
                    <th><? $usuario['apellido']  ?></th>
                    <th><? $usuario['usuario']  ?></th>
                    <th><? $usuario['contrasenia']  ?></th>
                    <th><? $usuario['email']  ?></th>
                </tr>
                <?php  }  ?>

                <th href="#"> Editar</th>
                <th href="#">Eliminar </th>
            </body>
        </table>

        <?php include("../template/pie.php"); ?>