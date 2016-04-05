
	<div class="row">
  		<div class="col-md-4"></div>
  		<div class="col-md-4">
  				{!!Form::open(['route'=>'articulos.store', 'method'=>'POST'])!!}
				<div class="form-group">
					{!!Form::label('materia','Numero de etiqueta:')!!}
					{!!Form::text('etiqueta',null,['class'=>'form-control','placeholder'=>'Etiqueta'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('codigo','Numero de Codigo:')!!}
					{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo'])!!}
				</div>				
				<div class="form-group">
					{!!Form::label('precio','Precio:')!!}
					{!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingresa Precio'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('orden','Orden:')!!}
					 {!!Form::select('orden', [1,2,3,4,5,6], null, array('class'=>'form-control input-md')) !!}
				</div>
				<div class="form-group">
					{!!Form::label('status','Estado en existencia:')!!}
					{!!Form::select('status', [true,false], null, array('class'=>'form-control input-md')) !!}
				</div>								
				<div class="form-group">
					{!!Form::label('descripcion','Descripcion corta:')!!}
					{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion '])!!}
				</div>
				<div class="form-group">
					{!!Form::label('um','Unidad de Medida:')!!}
					{!!Form::text('um',null,['class'=>'form-control','placeholder'=>'Unidad de Medida'])!!}
				</div>				
				{!!Form::submit('Registrar Producto',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
  			</div>
 		<div class="col-md-4">			
		</div>
</div>

