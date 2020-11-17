<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM meteorito WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location:verMeteorito.php");
 
    
?>