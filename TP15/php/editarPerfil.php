<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];

    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    
    $query = "UPDATE perfil SET name='$name',apellido='$apellido',email='$email',tel='$tel',foto='$foto' WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("location: verPerfil.php")
   
    
?>