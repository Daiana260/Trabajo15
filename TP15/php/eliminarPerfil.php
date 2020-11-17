<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM perfil WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location: verPerfil.php");
 
    
?>