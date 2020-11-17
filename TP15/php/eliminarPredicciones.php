<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM prediccion WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location: verPredicciones.php");
 
    
?>