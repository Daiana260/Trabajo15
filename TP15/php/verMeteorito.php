<?php
    include("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: black"> <!-- style="background-color: black" -->
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');
        *{
            padding: 0;
            margin: 0;
        }
    </style>
    
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="inicio.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="meteoritos.php">Meteoritos</a>
                <a class="nav-link" href="satelites.php">Satelites</a>
                <a class="nav-link" href="predicciones.php">Predicciones</a>
                <a class="nav-link" href="perfil.php">Editar Perfil</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ver
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="verMeteorito.php">Ver Meteoritos</a>
                        <a class="dropdown-item" href="verSatelite.php">Ver Satelites</a>
                        <a class="dropdown-item" href="verPredicciones.php">Ver Predicciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="verPerfil.php">Ver Perfil</a>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <header style="width: 100%;">
        <img src="../img/fondo.png" alt="" width="100%" height="300px">
        <h1 style="text-align: center; margin-top: -200px; color: white;">Tipos de Meteoritos</h1>
        <div class="d-flex justify-content-center">
            <a style="width: 100px; margin-right: 20px;" type="button" class="btn btn-outline-light" href="verMeteorito.php">Meterito</a>
            <a style="width: 100px;" type="button" class="btn btn-outline-light" href="verSatelite.php" >Satelites</a>
        </div>   
    </header>


    <div class="mx-auto" style="width: 90%; margin-top: 150px; background-color: white; box-shadow: 0 0 20px rgb(78, 185, 218);">
        <div class="container">
            <div class="row">
            <?php 
                $query = "SELECT * FROM meteorito";
                $envio = $conexion->query($query);
                while($row=$envio->fetch_assoc()){
                    ?>
                <div class="shadow p-3 mb-5 bg-white rounded" style="margin: 20px; margin-top: 50px;">
                    <div class="col" style="background-color: white;  width: 100%; max-width: 300px; ">

                        <div class="card" style="width: 100%;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen'])?>" height="250px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $row['nomMeteorito'] ?> </h5>
                                <dl class="row">
                                    <dt class="col-sm-4">Peso:</dt>
                                    <dd class="col-sm-7"> <?php echo $row['peso'] ?> </dd>

                                    <dt class="col-sm-6">Ubicacion:</dt>
                                    <dd class="col-sm-12"> <?php echo $row['ubicacion'] ?> </dd>

                                    <dt class="col-sm-7">Clasificacion:</dt>
                                    <dd class="col-sm-5"> <?php echo $row['clasificacion'] ?> </dd>
                                </dl>
                                <p class="card-text"> <?php echo $row['informacion'] ?> </p>
                                <div class="d-flex justify-content-center">
                                    <a style="width: 100px; margin-right: 20px;" class="btn btn-outline-success" href="editarMeteo.php?id=<?php echo $row['id']; ?>">Modificar</a>
                                    <a style="width: 100px;" class="btn btn-outline-danger" href="eliminarMeteo.php?id=<?php echo $row['id']; ?>" >Eliminar</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>