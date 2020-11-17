<?php
    include("conexion.php");

    $newMeteorito = $_POST['newMeteorito'];
    $tipo = $_POST['tipo'];
    $fechaAprox = $_POST['fechaAprox'];
    $orbita = $_POST['orbita'];
    $info = $_POST['info'];

    $query = "INSERT INTO prediccion (newMeteorito, tipo, fechaAprox, orbita, info) VALUES ('$newMeteorito','$tipo','$fechaAprox','$orbita','$info')";
    $envio = $conexion->query($query);
    
    header("location: verPredicciones.php")
?>