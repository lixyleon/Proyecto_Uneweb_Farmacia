<?php

if (!isset($_POST['editar-imagen'])) {
  header('location:editarproceso.php?mensaje=error');
}

include("../../config/bd.php");
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
//guarda nombre de la imagem 
$img = $_FILES['image']['name'];
//toma el archivo
$archivo = $_FILES['image']['tmp_name'];
$rut = "imagenes/".$img;
$_FILES['image']['type'];
$_FILES['image']['size'];

$extensiones = array(0 => 'image/jpg', 1 => 'image/jpeg', 2 => 'image/png');
$max_tamanyo = 1024 * 1024 * 8;

if (in_array($_FILES['image']['type'], $extensiones)) {
  //  echo 'Es una imagen';
  if ($_FILES['image']['size'] < $max_tamanyo) {
    //   echo 'Pesa menos de 1 MB';
    if (move_uploaded_file($archivo, $rut)) {
      $query = $conexion->prepare("UPDATE ofertas SET title=?, description=?, image=? WHERE id=?");
      $resultado = $query->execute([$title,$description,$rut,$id]);
     
      if ($resultado === TRUE) {
        header('location: index.php?mensaje=modificado');
      } else {
        header('location: index.php?mensaje=error');
        exit();
      }
    }
  }
}

