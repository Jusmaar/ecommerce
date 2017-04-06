
{!!Form::open(['url'=>'/products/'.$product->id,'method'=>'DELETE','class'=>'inline-block'])!!}
	<input type="submit" class="btn btn-link ib" value="Eliminar producto"></input>

{!!Form::close()!!}