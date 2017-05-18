<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{url('CelularesPeru/css/bootstrap-flex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('CelularesPeru/css/franco.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('CelularesPeru/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/fontawesome/css/font-awesome.css ')}}">
  </head>
  <body>
     <!--Header-->


    <header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">
            <div class="col-xs-3 ">
              <h1><a href="{{url('/')}}"><img class="imagen3" width="350px" height="100px" max-width="100%" src="CelularesPeru/imagenes/2.png"></a></h1>
            </div>
             <div class="col-xs-6 text-xs-right" id="textf">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                            <a href="{{ url('/register') }}" class="text-uppercase color-f hidden-xs-down font-weigth-bold estilof"><img src="CelularesPeru/imagenes/mregistrar.png"> Registrar</a>
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold estilof " href="{{ url('/login') }}"><img src="CelularesPeru/imagenes/login.png"> Iniciar Sesión</a>
                            
                @else
                    
                                <a href="#" class="login text-uppercase font-weigth-bold" id="displayf">
                                    {{ Auth::user()->name }} 
                                </a>

                        
                                 <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="CelularesPeru/imagenes/salirmenuf.png" id="imagf">
                                            Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
                            
                @endif
            </div> 
        </div>
      </div>  
    </header>

    <!--Menu-->
    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 offset-xs-1 col-md-7 offset-md-0" id="div-nav">
            <ul class="nav navbar-nav" id="nav-f" >
              <li class="nav-item text-xs-center">
                <a href="{{url('/')}}" class="nav-link"><img src="CelularesPeru/imagenes/mhome1.png"> Home</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/catalogo')}}" class="nav-link"><img src="CelularesPeru/imagenes/mcatalogo1.png"> Catalogo</a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/carrito')}}" class="nav-link"><img src="CelularesPeru/imagenes/mcarrito1.png"> Carrito<span>
                {{$productsCount}}
                </span>
                </a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/nosotros')}}" class="nav-link active"><img src="CelularesPeru/imagenes/mnosotros3.png"><strong> Nosotros</strong></a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/contacto')}}" class="nav-link"><img src="CelularesPeru/imagenes/mcontacto1.png"> Contacto</a>
              </li>
              @if (Auth::guest())
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="{{url('/login')}}" class="nav-link"><img src="CelularesPeru/imagenes/mlogin.png"> Iniciar Sesión</a>
              </li>
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="{{ url('/register') }}" class="nav-link"><img src=CelularesPeru/imagenes/registro1.png> Registrar</a>
              </li>
              @else
              <li class="nav-item text-xs-center hidden-sm-up">
                <a class="nav-link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="CelularesPeru/imagenes/salida.png">
                                            Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
              </li>
              @endif

            </ul>
          </div>
          <div class="col-xs-12 col-md-4 offset-md-1 hidden-xs-down" id="div-nav2">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Que esta buscando?"></input>
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
                <input  type="text" class="form-control" placeholder="¿Que esta buscando?"></input>
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
    <!--Nosotros-->
      <div id="nosotros-container">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 textcontenido">
            
 
            <section id="inf-nosotros">
              <article class="info-nosotros-article">
                <img src="CelularesPeru/imagenes/1.jpg" width="300px" height="200px">
                <div>
                <h3><strong>Misión</strong></h3>
                <p>Vender los mejores productos a precios tecnológicos con respecto a celulares a precios accesibles para la comunidad peruana.</p>
                </div>
              </article>

              <article class="info-nosotros-article">
                <img src="CelularesPeru/imagenes/7.jpg" width="300px" height="200px">
                <div>
                <h3><strong>Visión</strong></h3>
                <p>Ser una empresa financieramente sana, formada por profesionales capacitados y líder en tendencias de tecnología móvil.</p>
                </div>
              </article>

              <article class="info-nosotros-article">
                <img src="CelularesPeru/imagenes/5.jpg" width="300px" height="200px">
                <div>
                <h3><strong>Compromiso</strong></h3>
                <p>Nuestro pago incluye 3 premisas como socios estratégicos para la búsqueda de tecnología: seriedad, transparencia y trayectoria.</p>
                </div>
            </article>
            </section>
        </div>
        
      </div>
      </div>
    </div>

    <!--/Nosotros-->


    <!--Informacion-->
      <div id="info-container">
        <div id="container">
          <div class="row text-xs-center">
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/13.png')}}" alt="calidad" class="img-fluid">
              <h4>Calidad</h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/12.png')}}"  alt="envio" class="img-fluid">
              <h4>Envio </h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/4.png')}}"  alt="soporte" class="img-fluid">
              <h4>Atencion 24h</h4>
            </div>
          </div>
        </div>
      </div>
    <!--/Informacion-->

    <!--Footer-->
    <footer id="footer-container">
      <div class="contenedor-f">
          <article class="footer-1">
            <div class="footer-1-1">
              <p>Síguenos:</p>
              <a href="https://www.facebook.com/" target="_blank"><img src="CelularesPeru/imagenes/facebook.png"></a>
              <a href="https://www.twitter.com/" target="_blank"><img src="CelularesPeru/imagenes/twitter.png"></a>
              <a href="https://www.google+.com/" target="_blank"><img src="CelularesPeru/imagenes/google-plus.png"></a>         
            </div>
            <div class="footer-1-2">
              <p>Escríbenos:</p>
              <p><a href="mailto:celularesperu@gmail.com"><img src="CelularesPeru/imagenes/gmail.png"> @celularesperu@gmail.com</a></p>
            </div>        
          </article>

          <article class="footer-2">
            <p><cite>Copyright © 2005-2017</cite></p>
            <p><cite>Peruvian Nexus</cite></p>
            <p><cite>Todos los derechos reservados</cite></p>
          </article>

          <article class="footer-3">
            <div class="division">
              <ul class="navegador">
                <li class="nav-items">
                  <a href="{{url('/')}}" class="n-link1"><img src="CelularesPeru/imagenes/casa.png">Home</a>
                </li>
                <li class="nav-items">
                  <a href="{{url('/catalogo')}}" class="n-link2"><img src="CelularesPeru/imagenes/catalogo.png">Catalogo</a>
                </li>
                <li class="nav-items">
                  <a href="{{url('/carrito')}}" class="n-link3"><img src="CelularesPeru/imagenes/carrito.png">Carrito</a>
                </li>
                <li class="nav-items">
                  <a href="{{url('/contacto')}}" class="n-link4"><img src="CelularesPeru/imagenes/contacto.png">Contacto</a>
                </li>
                <li class="nav-items">
                  <a href="{{url('/login')}}" class="n-link5"><img src="CelularesPeru/imagenes/login.png">Entrar</a>
                </li>
              </ul>
            </div>

          </article>
      </div>
    </footer>
    <!--/Footer-->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>
  </body>
</html>