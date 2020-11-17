<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];

    $nomMeteorito = $_POST['nomMeteorito'];
    $peso = $_POST['peso'];
    $ubicacion = $_POST['ubicacion'];
    $clasificacion = $_POST['clasificacion'];
    $informacion = $_POST['informacion'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    $query = "UPDATE meteorito SET nomMeteorito='$nomMeteorito',peso='$peso',ubicacion='$ubicacion',clasificacion='$clasificacion',informacion='$informacion' ,imagen='$imagen' WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("location: verMeteorito.php")
   
    
?>