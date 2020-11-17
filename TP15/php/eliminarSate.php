<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM satelite WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location: verSatelite.php");
 
    
?>