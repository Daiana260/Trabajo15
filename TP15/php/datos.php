<?php 
    include("conexion.php");
    
    $nombre = $_POST['nombre'];
    $pwd = $_POST['pwd'];
    
    $validacion;

    $query = mysqli_query($conexion,"SELECT * FROM registrarse WHERE nombre = '".$nombre."' AND pwd = '".$pwd."'");
    
    $resultado = mysqli_num_rows($query);
    
    if($resultado == 1){
        $validacion =  $nombre;
    }else{
        $validacion = "Nombre de usuario y/o contraseña incorrectos";
        header("Location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Bienvenido!</title>
</head>
<body style="background-color: #ECF0F1">
<!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand">
            <img src="../img/NASAlogo.png" width="80" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            Bienvenido! <?php echo $nombre?>
        </a>
    </nav>
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 50%; margin-top: 50px; margin-left: 25%; padding: 30px">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center">¡Bienvenido de Nuevo <?php echo $nombre?> !</h5>
            <p class="text-center">Preciona el siguiente boton! para ir a la pagina de Inicio</p>
            <a class="btn btn-outline-primary" style="margin-left: 40%" href="inicio.php" role="button">Ir a Inicio</a>
        </div>
    </div>
</body>
</html>