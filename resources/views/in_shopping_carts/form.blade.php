{!! Form::open(['url' => '/in_shopping_carts','method'=> 'POST']) !!}
 	
    
    <input type="hidden" name="product_id" value="{{$product->id}}"></input>
	<input type="submit" value="Agregar al carrito" class="btn btn-success"></input>

     

{!! Form::close() !!}
