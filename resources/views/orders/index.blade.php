<!DOCTYPE html>
<html>
<head>
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
              <h1>CelularesPeru</h1>
            </div>
             <div class="col-xs-3 text-xs-right">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                    
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">Login</a>
                            
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
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Dashboard</h2>	
			</div>
			<div class="panel-body">
				<h3>Estadisticas</h3>
				<div class="row">
					<div class="col-xs-4 col-md-3 col-lg-2 est">
						<span class="estadistica">{{$totalMonth}}USD</span>
						Ingresos del mes
					</div>
					<div class="col-xs-4 col-md-3 col-lg-2 est">
						<span class="estadistica">{{$totalMonthCount}}</span>
						Numero de ventas
					</div>
				</div>
				<h3>Ventas</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>ID. venta</td>
							<td>Comprador</td>
							<td>Direccion</td>
							<td>Fecha de venta</td>
							
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
						   <tr>
							<td>{{$order->id}}</td>
							<td>{{$order->recipient_name}}</td>
							<td>{{$order->address()}}</td>
							<td>{{$order->created_at}}</td>
							
						   </tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>


</body>
</html> 