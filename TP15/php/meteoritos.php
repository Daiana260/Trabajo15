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
<body style="background-color: black"> 
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

        <div class="content" style="width: 50%; margin-left: 25%; background-color: white;">
        
            <form method="POST" action="guardarMeteor.php" enctype="multipart/form-data" style=" padding: 20px; margin-top: 150px; box-shadow: 0 0 20px rgb(78, 185, 218);">
                <h1 style="font-family: 'Open Sans Condensed', sans-serif; text-align: center;">Ingresa el Meteorito:</h1>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Meteorito:</label>
                    <input type="text" class="form-control" name="nomMeteorito">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Clasificación:</label>
                    <select class="form-control" name="clasificacion">
                    <option selected>Choose</option>
                    <option value="Pedregoso">Pedragoso</option>
                    <option value="Metálico">Metalico</option>
                    <option value="Hierro">Hierro</option>
                    <option value="Metales Pedragoso">Metales Pedragoso</option>
                    </select>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Ubicacion encontrado:</label>
                        <input type="text" class="form-control" name="ubicacion">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Peso:</label>
                        <input type="text" class="form-control" name="peso">
                    </div>
                </div>
                <div class="form-group">
                  <label>Imagen Satelite:</label>
                  <input type="file" class="form-control" name="imagen">
                </div>
                <div class="form-group">
                  <label>Brinde Mayor Informacion:</label>
                  <textarea class="form-control" rows="3" name="informacion"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                  <input style="margin-right: 20px" type="submit" class="btn btn-outline-success" value="Guardar">
                  <a href="inicio.php" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>

      <br>
      <br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>