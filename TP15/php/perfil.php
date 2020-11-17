<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-image: url(../img/fodo.jpg); background-size: 100% 100%; background-attachment: fixed;">
  
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
          <a class="dropdown-item" href="verPredicciones.php">Ver Perfil</a>
        </div>
    </li>
    </div>
  </div>
</nav>

  <div class="perfil" style="width: 60%; margin-left: 20%; background-color: white; margin-top: 150px; box-shadow: 0 0 20px rgb(17, 188, 240);">
    <h1 style="text-align: center; font-family: 'Open Sans Condensed', sans-serif; font-size: 50px;">Perfil</h1>
    <form method="POST" action="savePerfil.php" enctype="multipart/form-data" style="padding: 15px; margin: 10px;">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Nombre</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group col-md-6">
          <label>Apellido</label>
          <input type="text" class="form-control" name="apellido">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group col-md-6">
          <label>Telefono</label>
          <input type="number" class="form-control" name="tel">
        </div>
      </div>
      <div class="form-group">
        <label>Ingrese foto de Perfil:</label>
        <input type="file" class="form-control-file" name="foto">
      </div>
      <input style="margin-left: 40%;" type="submit" class="btn btn-outline-success" value="Guardar">
      <a href="inicio.php" class="btn btn-outline-danger">Cancelar</a>

    </form>
  </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>