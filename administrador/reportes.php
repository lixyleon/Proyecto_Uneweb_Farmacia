<?php include("../../template/cabecera.php"); ?>

<?php

include("../../config/bd.php");

$sentencia = $conexion->query("SELECT * FROM ventas");
$listaventas = $sentencia->fetchAll(PDO::FETCH_OBJ);

$sql = $conexion->query("SELECT * FROM pagos");
$listapagos = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>




















<?php include("../../template/pie.php"); ?>