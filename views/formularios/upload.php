<?php 

if (isset($_FILES['file'])){
    $file = $_FILES['file'];
    $filename = $file['name'];
    $mimetype =$file['type'];

    var_dump($file);
    die();

    $allowed_types = array("image.jpg", "image.jpeg", "image.png");
    if (!in_array($mimetype,$allowed_types)){
    header("location:index.php");
    }

    // Creando directorio de uploads




    // Moviendo archivos a uploads





}else{
    header("location:index.php");


}












?>