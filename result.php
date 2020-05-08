
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sabes Biblia ?</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body class="fondo1" onload="MostrarResultado()">
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="result.php" class="brand-logo" class="flow-text">Resultado</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Jugar</a></li>
      
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Jugar</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    <div class="container">


        <h4>Felicidades, haz concluido El Juego</h4>
        <h5>Obtuviste una calificación de:</h5>
        <label id="lblResultado" style="color: rgb(255, 255, 255); font-size: 30px; background: red; padding: 14px; margin: auto; border-radius: 4px 4px 7px;"></label>
        <br><br>
        <button id="btnReiniciar" class="waves-effect waves-light btn-small blue" onclick="ReiniciarTrivia()" class="boton1">Jugar otra vez</button>  &nbsp;  &nbsp;  &nbsp;

     </div>

     
     <script src="js/funcionalidad.js"></script>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <div class="collection">
              <a href="result.html" class="collection-item"><span class="  badge">B). Si en algo hemos fallado...abogado tenemos.</span>pregunta 1</a>
              <a href="result.html" class="collection-item"><span class="badge">C). con amor eterno te he amado; por tanto te prolongue mi misericordia.</span>pregunta 2</a>
              <a href="result.html" class="collection-item"><span class=" badge">A). Genesis 3:15</span>pregunta 3</a>
              <a href="result.html" class="collection-item"><span class="badge">B). Exodo 4: 28 </span>pregunta 4</a>
              <a href="result.html" class="collection-item"><span class=" badge">C). Proviene del verbo ser, significando YO Soy.</span>pregunta 5</a>
            </div>

          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
          </div>
        </div>

     </div>



     <br><br><br><br><br> <br><br>

  <footer class="page-footer indigo darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">sabes Biblia ? ....</h5>
          <p class="grey-text text-lighten-4 " class="flow-text">Es un Juego Desarrollado por la Empresa Jvilsoft Diseñado a medida con Amor Para El servicio del señor enfocado
            a los Adolecentes que por medio de estas herramineta podran los maestros evaluar las lecciones aprendidas en las escuela dominical</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Manual</h5>
          <ul>
            <li><a href="https://www.facebook.com/juanjairvillalobonuñez.co" target="_blank" class="white-text"> <i class="material-icons Medium">textsms</i> sigenos en facebook</a></li>
            <li><a href="https://www.freepik.es/fotos-vectores-gratis/personas">Vector de Personas creado por brgfx - www.freepik.es</a></li>
          <li> <a class="waves-effect waves-light btn-small blue btn modal-trigger" href="#modal1">Ver Respuestas</a></li>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li><a class="white-text" href="#!">3017326773</a> <i class="material-icons Medium">phone</i> </li> 
            <li><a class="white-text" href="#!">3103144203</a> <i class="material-icons Medium">phone_iphone</i> </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2020 sabes biblia ? <a class="blue-text text-lighten-3" href="index.php">todos los derechos reservados</a>
      </div>
    </div>
  </footer>
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <!--<script src="js/abisos_toas.js"></script> -->
  <script src="js/modal.js"></script>
</body>

  </body>
</html>