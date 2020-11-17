<?php
    include("conexion.php");

    $nomSatelite = $_POST['nomSatelite'];
    $mision = $_POST['mision'];
    $misionMeteor = $_POST['misionMeteor'];
    $fabricante = $_POST['fabricante'];
    $duracion = $_POST['duracion'];
    $fechaLanzamiento= $_POST['fechaLanzamiento'];
    $EstadoOperativo= $_POST['EstadoOperativo'];
    $orbita = $_POST['orbita'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $info = $_POST['info'];
    

    $query = "INSERT INTO satelite (nomSatelite, mision, misionMeteor,fabricante,duracion, fechaLanzamiento, EstadoOperativo, orbita, imagen, info) VALUES ('$nomSatelite','$mision','$misionMeteor','$fabricante','$duracion','$fechaLanzamiento','$EstadoOperativo','$orbita','$imagen','$info')";
    $envio = $conexion->query($query);
    header("location: verSatelite.php")
?>