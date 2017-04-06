{!! Form::open(['url' =>$url,'method'=>$method,'files' => true]) !!}
			<div class="form-group">
				{{ Form::text('title',$product->title,['class' => 'form-control','placeholder'=>'Titulo...'])}}
			</div>
			<div class="form-group">
				{{ Form::text('marca',$product->marca,['class' => 'form-control','placeholder'=>'Marca...'])}}
			</div>
			<div class="form-group">
				{{Form::file('cover')}}
			</div>
			<div class="form-group">
				{{ Form::text('gama',$product->gama,['class' => 'form-control','placeholder'=>'Gama...'])}}
			</div>
			<div class="form-group">
				{{ Form::text('conectividad',$product->conectividad,['class' => 'form-control','placeholder'=>'Conectividad...'])}}
			</div>

			<div class="form-group">
				{{ Form::textarea('description',$product->description,['class' => 'form-control','placeholder'=>'Descripcion...'])}}
			</div>
			<div class="form-group">
				{{ Form::number('pricing',$product->pricing,['class' => 'form-control','placeholder'=>'Precio...'])}}
			</div>

      <div class="form-group text-right">
        <a href="{{url('/products')}}">Regresar al listado de celulares</a>
        <input type="submit" value="Enviar" class="btn btn-success"></input>
      </div>

		{!! Form::close() !!}