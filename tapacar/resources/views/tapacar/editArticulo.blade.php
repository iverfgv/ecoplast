
@extends('layouts.principal')
@section('content')


  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          {!!Form::open(['route'=>['allarticulos.update',$art->id], 'method'=>'PUT'])!!}
        <div class="form-group">
          {!!Form::label('materia','Numero de etiqueta:')!!}
          {!!Form::text('etiqueta',$art->etiqueta,['class'=>'form-control','placeholder'=>'Etiqueta'])!!}
        </div>
        <div class="form-group">
          {!!Form::label('materia','Numero de etiqueta:')!!}
          {!!Form::text('codigo',$art->codigo,['class'=>'form-control','placeholder'=>'Etiqueta'])!!}
        </div>      
        <div class="form-group">
          {!!Form::label('precio','Precio:')!!}
          {!!Form::text('precio',$art->precio,['class'=>'form-control','placeholder'=>'Ingresa Precio'])!!}
        </div>
        <div class="form-group">
          {!!Form::label('orden','Orden:')!!}
           {!!Form::select('orden', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],$art->orden, array('class'=>'form-control input-md')) !!}
        </div>
        <div class="form-group">
          {!!Form::label('status','Estado en existencia:')!!}
          {!!Form::select('status', [true,false],$art->status, array('class'=>'form-control input-md')) !!}
        </div>                
        <div class="form-group">
          {!!Form::label('descripcion','Descripcion corta:')!!}
          {!!Form::text('descripcion',$art->descripcion,['class'=>'form-control','placeholder'=>'Descripcion '])!!}
        </div>
        <div class="form-group">
          {!!Form::label('um','Unidad de Medida:')!!}
          {!!Form::text('um',$art->um,['class'=>'form-control','placeholder'=>'Unidad de Medida'])!!}
        </div>        
        {!!Form::submit('Editar Producto',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
        </div>
    <div class="col-md-4">      
    </div>
</div>