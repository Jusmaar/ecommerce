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
                <a href="{{url('/catalogo')}}" class="nav-link" style="color: black"><img src="CelularesPeru/imagenes/mcatalogo3.png" ><strong> Catalogo</strong></a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/carrito')}}" class="nav-link"><img src="CelularesPeru/imagenes/mcarrito1.png"> Carrito<span>
                {{$productsCount}}
                </span>
                </a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/nosotros')}}" class="nav-link active" style="color: rgba(0,0,0,.3)"><img src="CelularesPeru/imagenes/mnosotros1.png"> Nosotros</a>
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

    <!--Celulares-->
        <section id="celulares-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="list-group filtros-toggle">
              <a id="filtrosToggle" href="" class="list-group-item list-group-item-action navbar-toggler hidden-sm-up" data-target="#filtros-container" data-toggle="collapse">
                <h5 class="list-group-item-heading">Filtros
                <i class="fa fa-chevron-down"></i>
                </h5>
              </a>
            </div>
            <div id="filtros-container" class="collapse navbar-toggleable-xs">
              <div class="list-group">
                <a href="" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Gama</h5>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Alta <span class="tag tag-pill tag-default pull-xs-right">100</span>
                </a>
                 <a href="" class="list-group-item list-group-item-action">
                  Media <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
                 <a href="" class="list-group-item list-group-item-action">
                  Baja <span class="tag tag-pill tag-default pull-xs-right">69</span>
                </a>
              </div>
              <div class="list-group">
                <a href="" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Conectividad</h5>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  4G <span class="tag tag-pill tag-default pull-xs-right">70</span>
                </a>
                 <a href="" class="list-group-item list-group-item-action">
                  3G <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
              </div>
              <div class="list-group">
                <a href="" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Marca</h5>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Samsung <span class="tag tag-pill tag-default pull-xs-right">70</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  iPhone <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  HTC <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  LG <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Huawei <span class="tag tag-pill tag-default pull-xs-right">50</span>
                </a>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-md-9">
            <div class="row listado-celulares">

            @foreach ($products as $product)
              <div class="col-xs-12 col-sm-10">
                <div class="card">


                @if($product->extension)
                  <img src="{{url("/products/images/$product->id.$product->extension")}}" class="card-img-top img-fluid">
                @endif

                  <div class="card-block">
                  <div class="inblock">
                    <h3 class="card-title tituloprod">{{$product->title}} </h3>
                    <h2 class="precioprod"><strong>s/{{$product->pricing}}</strong></h2>
                  </div>
                    
                    <p><strong>Marca:  </strong>{{$product->marca}}</p>
                    <p><strong>Gama:  </strong>{{$product->gama}}</p>
                    <p><strong>Conectividad:  </strong>{{$product->conectividad}}</p>
                    <p><strong>Descripcion</strong></p>
                    <p>{{$product->description}}</p>
                    <br>

                    <p class="text-xs-center">
                      @include("in_shopping_carts.form",["product"=>$product])
                    </p>

                        @if(Auth::check() && $product->user_id == Auth::user()->id)
                        <div>
                          <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
                          @include('products.delete',['product'=>$product])
                        </div>

                        @endif

                  </div>
                </div>


              </div>

            @endforeach
            </div>

            


          </div>

        </div>
      </div>


    </section>


    <!--/Celulares-->

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