<?php
    include("conexion.php");

    $nomMeteorito = $_POST['nomMeteorito'];
    $clasificacion = $_POST['clasificacion'];
    $ubicacion = $_POST['ubicacion'];
    $peso = $_POST['peso'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $informacion = $_POST['informacion'];


    $query = "INSERT INTO meteorito (nomMeteorito, clasificacion, ubicacion,peso,imagen, informacion) VALUES ('$nomMeteorito','$clasificacion','$ubicacion','$peso','$imagen','$informacion')";
    $envio = $conexion->query($query);

    header("location: verMeteorito.php")
?>