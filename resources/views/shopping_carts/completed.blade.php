<!DOCTYPE html>
<html>
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
    		

	<title></title>
</head>
<body>

	<header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">
            <div class="col-xs-3 ">
              <h1>Peruvian Nexus</h1>
            </div>
             <div class="col-xs-3 text-xs-right">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                    
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">Iniciar Sesión</a>
                            
                @else
                    
                                <a href="#" class="login text-uppercase font-weigth-bold">
                                    {{ Auth::user()->name }} 
                                </a>

                        
                                 <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&#62;
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
                            
                @endif
            </div> 
        </div>
      </div>  
    </header>

	<div class="container">
		<h1>Compra completada</h1>
		<h3> Tu pago fue procesado <span class="{{$order->status}}">{{$order->status}}></span></h3>
		<p>Confirma los detalles de envio</p>
		<div class="row">
			<div class="col-xs-6">Email</div>
			<div class="col-xs-6">{{$order->email}}</div>
		</div>
		<div class="row">
			<div class="col-xs-6">Direccion</div>
			<div class="col-xs-6">{{$order->address()}}</div>
		</div>

		<div class="row">
			<div class="col-xs-6">Codigo Postal</div>
			<div class="col-xs-6">{{$order->postal_code}}</div>
		</div>
		<div class="row">
			<div class="col-xs-6">Ciudad</div>
			<div class="col-xs-6">{{$order->city}}</div>
		</div>
		<div class="row">
			<div class="col-xs-6">Estado y Pais</div>
			<div class="col-xs-6">{{"$order->email $order->cuntry_code"}}</div>
		</div>
		<div class="text-xs-center">
			<a href="{{url('/compras/'.$shopping_cart->customid)}}">Link de tu compra</a>
			
		</div>

	</div>

</body>
</html>

	