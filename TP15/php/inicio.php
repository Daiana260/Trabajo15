<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: black;">
    
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
        <img src="../img/planeta.jpg" alt="" width="100%" height="350px">
        <h1 style="text-align: center; margin-top: -200px; color: white;">Bienvenido!</h1>
        <div class="d-flex justify-content-center">
            <a style="width: 100px; margin-right: 20px;" type="button" class="btn btn-outline-light" href="verMeteorito.php">Meterito</a>
            <a style="width: 100px;" type="button" class="btn btn-outline-light" href="verSatelite.php" >Satelites</a>
        </div>   
    </header>

    <div class="content" style="background-color: rgb(255, 255, 255); margin-top: 150px; width: 80%; margin-left: 10%; box-shadow: 0 0 20px rgb(255, 252, 59);">
      <!-- <div class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 350px;">Larger shadow</div>   -->
      <h1 class="text-center">Meteoritos</h1>
      <div class="card-deck">
        <div class="card" style="margin: 30px;">
          <img src="../img/MeteorNASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">¿Qué es una lluvia de meteoritos?</h5>
            <p class="card-text">Un meteorito es una roca espacial —o meteoroide— que ingresa en la atmósfera de la Tierra. A medida que la roca espacial cae hacia la Tierra, la resistencia —o rozamiento— del aire sobre la roca la calienta sobremanera. Lo que vemos es una «estrella fugaz».</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card" style="margin: 30px;">
          <img src="../img/psyche16NASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">NASA tiene en la mira un asteroide que vale más que toda la economía global</h5>
            <p class="card-text">NASA tiene todo listo para una misión muy especial: en 2022 partirá en busca de un asteroide metálico del cinturón principal de asteroides Psyche 16, cuyo valor estimado es de 700 quintillones de dólares.Los más interesante del asteroide Psyche "Hemos visto otros meteoritos que son mayoritariamente metálicos, pero lo que hace único a Psyche es que puede que esté hecho totalmente de hierro y níquel", agregó Becker, quien no descarta que también contenga oro y plata.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card" style="margin: 30px;">
          <img src="../img/imgNASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">¿Asteroide o meteoro: en qué se diferencian?</h5>
            <p class="card-text">Un asteroide es un pequeño objeto rocoso que orbita alrededor del Sol. Los asteroides son más pequeños que un planeta, pero más grandes que los objetos del tamaño de un trozo de roca que llamamos meteoroides. El meteoro es el resultado de un meteoroide, —una pequeña parte de un asteroide o cometa— que arde al entrar en la atmósfera terrestre y crea un haz de luz en el cielo.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>

      <h1 class="text-center">Satélites</h1>
      <div class="card-deck">
        <div class="card" style="margin: 30px;">
          <img src="../img/sateliteNASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">¿Cual es la funcion del Satelite?</h5>
            <p class="card-text">Los satélites se utilizan para muchos propósitos. Entre otras cosas, pueden usarse para hacer mapas estelares y mapas de superficies planetarias, así también como para obtener fotografías de los planetas en los que son lanzados. Entre las modalidades más frecuentes se incluyen a los satélites de observación terrestre tanto civiles como militares, satélites de comunicaciones, satélites de navegación, satélites meteorológicos y telescopios espaciales. Las estaciones espaciales y las naves espaciales en órbita también son satélites.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card" style="margin: 30px;">
          <img src="../img/tipoNASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tipos de satélites</h5>
            <p class="card-text">
              <dl class="row">
                <dt class="col-sm-9">Satélites de comunicación.</dt>
                <dd class="col-sm-12">Ayudan a transmitir y efectuar telecomunicaciones.</dd>
                <dt class="col-sm-9">Satélites meteorológicos.</dt>
                <dd class="col-sm-12">Son aquellos empleados para evaluar, medir y predecir condiciones climáticas de la Tierra.</dd>
                <dt class="col-sm-9">Satélites de navegación.</dt>
                <dd class="col-sm-12">Son aquellos que se usan para conocer la posición precisa y exacta de algo o de alguien. Son, por ejemplo, los utilizados por el sistema de GPS, Galileo y GLONASS.</dd>
                <dt class="col-sm-9">Satélites de reconocimiento. </dt>
                <dd class="col-sm-12">Son más conocidos como satélites espías y se utilizan en el ámbito militar o en servicios de inteligencia.</dd>
                <dt class="col-sm-9">Satélites astronómicos.</dt>
                <dd class="col-sm-12">Se fabrican para observar galaxias, planetas, asteroides u otros objetos astronómicos.</dd>
              </dl>              
            </p>
          </div>
        </div>
        <div class="card" style="margin: 30px;">
          <img src="../img/lanzamientoNASA.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lanzamiento de satélites</h5>
            <p class="card-text">Para poder colocar un satélite que orbite la Tierra es preciso un mecanismo impulsor lo suficientemente poderoso ya que el satélite deberá alcanzar una velocidad de 8 km por segundo. Además, es necesaria la construcción de un cohete que posea en su interior uno o dos cohetes más pequeños para poder alcanzar dicha velocidad. El cohete se mantiene activo por unos pocos segundos. Después de este tiempo comienza a descender. Por tanto, debe ser muy veloz para que el satélite logre salir de la atmósfera terrestre y orbitar la Tierra.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

<br>
<br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>