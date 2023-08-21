<?php
if ($_POST) {
    header("location:inicio.php");
}
?>
<?php include("config/bd.php"); 

$url = "http://" . $_SERVER['HTTP_HOST'] . "/Proyecto_Uneweb_Farmacia"
?>
<!doctype html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-danger shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 7rem" fill="currentColor" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475Z" />
                <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z" />
            </svg>
        </div>
        <div class="text-center fs-1 fw-bold">FarmaSalud</div>
        <div class="input-group m-4">
            <form action="iniciarSesion.php" method="POST">
                <?php
                if (isset($_GET['error'])) {
                ?>
                    <p class="error">
                        <?php echo $_GET['error'] ?>
                    </p>
                <?php   } ?>

                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> Debes colocar todos los datos
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php  } ?>
                <div class="input-group mt-4 ">
                    <div class="input-group-text bg-dark">
                        <img src="../imagenes/username-icon.svg" alt="username-icon" style="height: 1rem" />
                    </div>
                    <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" class="form-control bg-light">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-dark">
                        <img src="../imagenes/password-icon.svg" alt="password-icon" style="height: 1rem" />
                    </div>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese contraseña" class="form-control bg-light">
                </div>
                <div class="input-group-append d-flex text-black">
                        <button id="show_password" class="btn " type="button" onclick="mostrarPassword()"> <span class="bi bi-eye-fill"></span> </button>
                        <p class="m-1">Ver contraseña</p>
                    </div>
                <div class="">
                    <input type="submit" value="Iniciar sesión" class="btn btn-dark text-white  w-100 mt-4 fw-semibold shadow-sm">

                </div>
            </form>
            <div class="text-center">
                <button type="button" class="btn btn-danger mt-4 w-100">
                    <a class="text-light " href="<?php echo $url; ?> ">Ver Sitio Web</a>
                </button>
                    
            </div>
        </div>
    </div>




    <script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("clave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('bi bi-eye-fill').addClass('bi bi-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('bi bi-eye-fill').addClass('bi bi-eye-fill');
		}
	} 
	
	</script>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="bottom-login.js"></script>

</body>

</html>