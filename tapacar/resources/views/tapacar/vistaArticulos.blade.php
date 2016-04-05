
@extends('layouts.principal')
@section('content')
<br><br><br><br><br><br><br><br><br><br>
<a href="articulos">Crear Articulo</a>
<table style="width:100%">
  <tr>
    <th>Articulo Id</th>
    <th>Producto</th> 
    <th>Precio</th>
  </tr>
  @foreach($articulos as $art) 
  <tr>
    <td>{{$art->id}}</td>
    <td>{{$art->etiqueta}}</td> 
    <td>{{$art->precio}}</td>
    <td>{!! link_to('allarticulos/'.$art->id, 'Editar ',array('class'=>'btn btn-info')) !!}</td>
    {!!Form::open(['route'=>['allarticulos.destroy',$art->id], 'method'=>'DELETE'])!!}
    <td>{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</td>
    {!!Form::close()!!}
  </tr>
  @endforeach
</table>
@stop