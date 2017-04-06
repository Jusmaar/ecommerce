<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CelularesPeru/css/bootstrap-flex.min.css">
    <link rel="stylesheet" type="text/css" href="CelularesPeru/css/app.css">
    <link rel="stylesheet" type="text/css" href="CelularesPeru/fontawesome/css/font-awesome.css">
  </head>
  <body>
    <!--Header-->
    <header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">
            <div class="col-xs-3 ">
              <h1>CelularesPeru</h1>
            </div>
             <div class="col-xs-3 text-xs-right">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="#">Login</a>
            </div> 
        </div>
      </div>  
    </header>
    <!--/Header --> 

    <!--Menu-->
    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 offset-xs-1 col-md-5 offset-md-0">
            <ul class="nav navbar-nav" >
              <li class="nav-item text-xs-center">
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="catalogo.html" class="nav-link">Catalogo</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="#" class="nav-link">Carrito</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="nosotros.html" class="nav-link">Nosotros</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="contacto.html" class="nav-link">Contacto</a>
              </li>
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="login.html" class="nav-link">Login</a>
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-6 offset-md-1 hidden-xs-down">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Encontro lo que buscaba?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      </nav>

      <div id="search-bar" class="container hidden-sm-up">
        <div class="row">
          <div class="col-xs">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Encontro lo que buscaba?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!--/Menu-->


    <!--Login-->
    <div id="login-container">
      <div class="container">
        <div class="row">
         
          <div class="col-xs-12">
            <div class="cajalogin">

               <form class="form-group text-xs-center" role="form" method="POST" action="{{ url('/login') }}">
               {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label  for="email" class="datosUsuario">E-mail</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese usuario" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                  <label for="password" class="datosUsuario">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Ingrese contraseña" name="password" required>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                </div>
                <div class="form-check recordar">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remenber"> Recordarme
                  </label>
                </div>
                <button type="submit" class="btn btn-lg">Iniciar Sesion</button>
                
                  <a href="{{ url('/password/reset') }}" class="olvidar"><strong>¿Olvidaste tu contraseña?</strong></a>
                  <a href="" class="olvidar"><strong>¿Olvidaste tu usuario?</strong></a>

                <button  type="button" class="btn btn-registrar"> <a class="olvidar" href="{{ url('/register') }}"><strong>Registrarme</strong></a></button>
                
                
               
          </form>

        </div>
      </div>
    </div>

  </div>
  </div>




    <!--/Login-->



    <!--Informacion-->
      <div id="info-container">
        <div id="container">
          <div class="row text-xs-center">
            <div class="col-xs-12 col-md-4">
              <img src="CelularesPeru/imagenes/calidad.png" alt="calidad" class="img-fluid">
              <h4>Calidad</h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="CelularesPeru/imagenes/envio.png"  alt="envio" class="img-fluid">
              <h4>Envio </h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="CelularesPeru/imagenes/soporte.png"  alt="soporte" class="img-fluid">
              <h4>Atencion 24h</h4>
            </div>
          </div>
        </div>
      </div>
    <!--/Informacion-->

    <!--Footer-->
    <footer id="footer-container">
      <div class="container">
        <div class="row text-xs-center text-md-left">
          <div class="col-md-4">
            <h4>CelularesPeru<h5>
            <p>Celular: 987501482</p>
            <p>Email: celulareperu@gmail.com</p>
            <p>Visitanos en: </p>
            <figure>
              <img src="CelularesPeru/imagenes/redessociales.fw.png" usemap="#Map">
              <map name="Map">
              <area shape="rect" coords="-2,2,42,46" href="https://www.facebook.com/" target="_blank">
              <area shape="rect" coords="66,3,107,39" href="https://www.twitter.com" target="_blank">
            </figure>
          </map>
          </div>
          <div class="col-md-3 offset-md-5">
            <h4>Navegacion</h4>
            <ul class="nav">
              <li class="nav-item">
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="catalogo.html" class="nav-link">Catalogo</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Carrito</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contacto</a>
              </li>
              <li class="nav-item">
                <a href="login.html" class="nav-link">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--/Footer-->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="CelularesPeru/js/app.js"></script>
  </body>
</html>
