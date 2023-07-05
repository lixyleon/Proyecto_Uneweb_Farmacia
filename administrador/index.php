<?php
if ($_POST) {
    header("location:inicio.php");
}
?>
<?php include("config/bd.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container-fluid mt-5">
        <div class="row m-lg-1">
            <div class="col-4">              
            </div>
              <div class="col-4 bg-light">
                <div class="text-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                        <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475Z" />
                        <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z" />
                    </svg>
                </div>
                <div class=" text-center">
               <img src="../imagenes/usuario.jpg" width="300" height="300" class="my-3" alt="">
            </div>
                <h2 class="fw-bold text-center py-5">Iniciar Sesión</h2>
                <form action="iniciarSesion.php" method="POST">
                    <?php
                    if (isset($_GET['error'])) {
                    ?>
                        <p class="error">
                            <?php echo $_GET['error'] ?>
                        </p>
                    <?php   } ?>
                    <div class="mb-6 ">
                        <label for="">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" class="form-control input-box rm-border">
                    </div>
                    <div class=" mb-6">
                        <label for="">Contraseña</label>
                        <input type="text" id="clave" name="clave" placeholder="Ingrese contraseña" class="form-control input-box rm-border">
                    </div>
                    <div class="d-grid mb-3">
                        <input type="submit" value="Iniciar sesión" class="btn btn-block btn-dark rm-border">
                        
                    </div>
                </form>
            </div>
            <div class="col-4">
                
            </div>
        </div>
    </div>
















        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

</body>

</html>