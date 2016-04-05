@extends('layouts.administrador')
@section('content')
<br>
<div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Imagenes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Activo</th>
                                            <th>Imagen</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($img as $i)
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->ruta}}</td>
                                            <td>{{$i->descripcion}}</td>
                                            <td>{{$i->status}}</td>
                                            <td>
                                            <a class="fancybox" rel="group" href="{{'/storage/'.$i->ruta}}" title="{{$i->descripcion}}">    
                                                <img src="{{'/storage/'.$i->ruta}}" width="100px"\></td>
                                            </a>
                                            <th>
                                                    <a href="#" data-id="{{ $i->id }}" class="btn btn-danger btn-delete">
                                                    Eliminar
                                                    </a>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
               

                 <a href="/Admin/CrearImagen"><button type="button" class="btn btn-success">Nueva Imagen</button></a>
                
                <?php echo Form::open(array('route' => array('admin.destroy.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete'));
                 echo Form::close(); ?>
@stop