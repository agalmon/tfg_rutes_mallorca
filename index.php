<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body class="bg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">TFG Rutes Mallorca</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./">Inici</a></li>
            <li><a href="./aboutus.html">Sobre el TFG</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="dialogflow">
    <!-- Aqui irá el Dialogflow-->
  </div>


  <div class=aboutus><center>
    <p>
      <form action="./mapa.php" method="post">
      Coordenada origen: <br><input type="text" name="origen"><br>
      Coordenada destí: <br><input type="text" name="desti"><br>
      <input type="submit" name="submit" value="Encontrar ruta">
      </form>
    </p></center>
  </div>

  </body>
</html>
