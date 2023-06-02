<?php
if ($_POST) {
    header("location:inicio.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<h2 class="p-1 text-bg-danger text-center">Administrador</h2>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4      ">

            </div>

            <div class="col-md-4">
                <br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <form method="post">

                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingresa tu usuario">
                            </div>

                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Ingresa contraseña">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-danger"> Ingresar al Administrador</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>