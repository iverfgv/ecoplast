@extends('layouts.menuAdmin')
  @section('content')


       <!---contact-->


    <div class="container-fluid">

    <h3 class="head">Types</h3>
            <p></p>
            <br>
   {!!Form::open(['route'=>'types.store', 'method'=>'POST'])!!}
  <div class="form-group">
    {!!Form::label('titulo','Titulo:')!!}
    {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('descripcion','Descripción:')!!}
    {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>''])!!}
  </div>
  {!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}        
    </div>
  @stop

