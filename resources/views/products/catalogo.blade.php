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
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/fontawesome/css/font-awesome.css ')}}">
  </head>
  <body>
    <!--Header-->


    <header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">
            <div class="col-xs-3 ">
              <h1>Peruvian Nexus</h1>
            </div>
             <div class="col-xs-3 text-xs-right">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                    
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">Iniciar Sesion</a>
                            
                @else
                    
                                <a href="#" class="login text-uppercase font-weigth-bold">
                                    {{ Auth::user()->name }} 
                                </a>

                        
                                 <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&#62;
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
          <div class="col-xs-10 offset-xs-1 col-md-5 offset-md-0">
            <ul class="nav navbar-nav" >
              <li class="nav-item text-xs-center">
                <a href="index.html" class="nav-link active">Home</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="catalogo.html" class="nav-link">Catalogo</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/carrito')}}" class="nav-link">Carrito
                <span>
                  {{$productsCount}}
                </span>
                </a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="nosotros.html" class="nav-link">Nosotros</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="contacto.html" class="nav-link">Contacto</a>
              </li>
              @if (Auth::guest())
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="login.html" class="nav-link">Login</a>
              </li>
              @else
              <li class="nav-item text-xs-center hidden-sm-up">
                <a class="nav-link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
              </li>
              @endif

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
      <div class="container">
        <div class="row text-xs-center text-md-left">
          <div class="col-md-4">
            <h4>CelularesPeru<h5>
            <p>Celular: 987501482</p>
            <p>Email: celulareperu@gmail.com</p>
            <p>Visitanos en: </p>
            <figure>
              <img src="{{url('/CelularesPeru/imagenes/redessociales.fw.png')}}" usemap="#Map">
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
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>
  </body>
</html>