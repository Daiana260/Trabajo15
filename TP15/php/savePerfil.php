<?php
    include("conexion.php");

    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $query = "INSERT INTO perfil (name, apellido, email, tel, foto) VALUES('$name','$apellido','$email','$tel','$foto')";
    $envio = $conexion->query($query);

    header("Location: verPerfil.php")
?>
