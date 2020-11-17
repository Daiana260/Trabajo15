<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];

    $nomSatelite = $_POST['nomSatelite'];
    $mision = $_POST['mision'];
    $misionMeteor = $_POST['misionMeteor'];
    $fabricante = $_POST['fabricante'];
    $duracion = $_POST['duracion'];
    $fechaLanzamiento = $_POST['fechaLanzamiento'];
    $orbita = $_POST['orbita'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $info = $_POST['info'];

    $query = "UPDATE satelite SET nomSatelite='$nomSatelite',mision='$mision',fabricante='$fabricante',duracion='$duracion',info='$info' ,fechaLanzamiento='$fechaLanzamiento',orbita='$orbita',imagen='$imagen',info='$info' WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("location: verSatelite.php")
   
    
?>