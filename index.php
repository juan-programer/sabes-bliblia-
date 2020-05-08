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
<body class="fondo1">
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo" class="flow-text">Sabes Biblia?</a>
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

    <div class="container">

        <form action="result.php">

            <div class="steep show" id="steep-1">

              <h5> <strong class="blue-text">1.</strong> cual fue el segundo tema visto en este mes?</h5>

              <p>
                <label>
                  <input name="group1" type="radio" checked  value="0" onclick="SumarResultadoG(1);MostrarSiguiente()" /> A.
                  <span  class="blue-text">Jesús mi amigo permanente.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="1" onclick="SumarResultadoG(1);MostrarSiguiente()" /> B.
                  <span class="blue-text">Si en algo hemos fallado...abogado tenemos.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="2" onclick="SumarResultadoG(1);MostrarSiguiente()" /> C.
                  <span class="blue-text">Jesús es mi Pastor</span>
                </label>
              </p>
    

            </div>



            <div class="steep" id="steep-2">

              <h5> <strong class="blue-text">2.</strong> completa el siguiente versículo Jehova se manifestó a mi hace ya mucho tiempo, diciendo:</h5>

              <p>
                <label>
                  <input name="group1" type="radio" checked   value="0" onclick="SumarResultadoG(2);MostrarSiguiente2()" /> A.
                  <span  class="blue-text">Yo soy Jehova que te saque se Ur de los Caldeos.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="1" onclick="SumarResultadoG(2);MostrarSiguiente2()" /> B.
                  <span class="blue-text">Yo soy el Dios todo poderoso.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked value="2" onclick="SumarResultadoG(2);MostrarSiguiente2()"/> C.
                  <span class="blue-text">con amor eterno te he amado; por tanto te prolongue mi misericordia.</span>
                </label>
              </p>
    

            </div>



            <div class="steep" id="steep-3">

              <h5> <strong class="blue-text">3.</strong> Cual de las siguientes citas bíblicas declara que Dios es uno?</h5>

              <p>
                <label>
                  <input name="group1" type="radio" checked  value="0" onclick="SumarResultadoG(3);MostrarSiguiente3()"/> A.
                  <span  class="blue-text">Genesis 3:15</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="1" onclick="SumarResultadoG(3);MostrarSiguiente3()" /> B.
                  <span class="blue-text">1 timoteo 3:16</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked   value="2" onclick="SumarResultadoG(3);MostrarSiguiente3()" /> C.
                  <span class="blue-text"> Marcos 4:24</span>
                </label>
              </p>
    

            </div>


            <div class="steep" id="steep-4">

              <h5> <strong class="blue-text">4.</strong> En cual de los siguientes libros esta la promesa de salvación dada por Dios ?</h5>

              <p>
                <label>
                  <input name="group1" type="radio" checked  value="0" onclick="SumarResultadoG(4);MostrarSiguiente4()" /> A.
                  <span  class="blue-text">Lucas 5:5</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="1" onclick="SumarResultadoG(4);MostrarSiguiente4()" /> B.
                  <span class="blue-text">Exodo 4: 28</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="2" onclick="SumarResultadoG(4);MostrarSiguiente4()"/> C.
                  <span class="blue-text">Genesis 3:15</span>
                </label>
              </p>

  
            </div>


            <div class="steep" id="steep-5">

              <h5> <strong class="blue-text">5.</strong> Cual es la raíz de las cuatro letras hebreas JHWH?</h5>

              <p>
                <label>
                  <input name="group1" type="radio" checked  value="0" onclick="SumarResultadoG(5)" /> A.
                  <span  class="blue-text">Quiere decir Dios.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="1" onclick="SumarResultadoG(5)" /> B.
                  <span class="blue-text">Proviene de la palabra Jehova.</span>
                </label>
              </p>
    
              <p>
                <label>
                  <input name="group1" type="radio" checked  value="2" onclick="SumarResultadoG(5)" /> C.
                  <span class="blue-text"> Proviene del verbo ser, significando YO Soy.</span>
                </label>
              </p>
 
           
            </div>

            <div class="row center">
              <button class="waves-effect waves-light btn-small blue" id="btnEnviar" type="submit" value="Guardar" onclick="GuardarResultado()">Guardar</button>
            </div>

        </form>

     </div>
     
  </div>

  <br><br><br><br><br><br><br><br>
  

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
            <li><a href="https://web.whatsapp.com/" target="_blank" class="white-text"> <i class="material-icons Medium">phone_android</i> Siguenos en Whatsapp</a></li>
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
  <script src="js/funcionalidad.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <!--<script src="js/abisos_toas.js"></script> -->
 
  </body>
</html>