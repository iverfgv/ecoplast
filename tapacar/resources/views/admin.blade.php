@extends('layouts.administrador')
@section('content')
<br>
<script>
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>

<h1>Subir imagen</h1>
<form method="POST" action="/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
           
              <label>Nuevo Archivo</label>
              
               <input type='file' id="imgInp" />
              
          		<div class="form-group">
                        <label>Descripci&oacute;n</label>
                               <textarea class="form-control" rows="3" name="descripcion"></textarea>
                        </div>
 				
            	<div class="panel panel-primary">
                        <div class="panel-heading">
                            Imagen
                        </div>
                        <div class="panel-body">
                            <img id="blah" src="#" alt="your image" />
                        </div>
                        <div class="panel-footer">
                        </div>
                </div>
                <button type="submit">Enviar</button>
              
          </form>
      

@stop