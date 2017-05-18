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

	
	<div class="container">
		<div class="big-padding text-center blue-grey white-text"> </div>
		<h1 class="ver">Lista de Celulares</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Titulo</td>
					<td>Marca</td>
					<td>Gama</td>
					<td>Conectividad</td>
					<td>Descripcion</td>
					<td>Precio</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->title }}</td>
						<td>{{ $product->marca }}</td>
						<td>{{ $product->gama }}</td>
						<td>{{ $product->conectividad }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->pricing }}</td>
						<td>
						<a style="color: #E57000" class="ver" href="{{url("/products/$product->id")}}">Ver</a>
						</br>
						<a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
						@include('products.delete',['product'=>$product])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="floating">
		<a href="{{url('/products/create')}}" class="btn btn-primmary btnplus">
			<i class="fa fa-plus">Agregar</i>
		</a>
	</div>	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="CelularesPeru/js/app.js"></script>
</body>
</html>