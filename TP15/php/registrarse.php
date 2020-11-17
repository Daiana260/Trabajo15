<?php
    include("conexion.php")
?>
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
    
    <div class="content" style="width: 50%; margin-left: 25%; margin-top: 100px;">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">
              <img src="../img/NASAlogo.png" width="60" height="50" style="margin-top: -10px;" class="d-inline-block align-top" alt="" loading="lazy">
              Sensor de Meteoritos
            </a>
            <a class="navbar-brand" href="login.php">Login</a>
            <a class="navbar-brand" href="registrarse.php">Registrarse</a>
        </nav>
        <form method="POST" action="registro.php" style="padding: 10px; background-color: rgba(255, 255, 255, 0.89);">
            <h2 style="font-family: 'Open Sans Condensed', sans-serif; font-size: 30; text-align: center;">Registrate Usuario</h2>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pwd">
            </div>
          <button type="submit" class="btn btn-outline-dark" style="width: 100px; display:block; margin-left: auto; margin-right: auto;">Registrarse</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>