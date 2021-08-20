
<h2>{{$modo}} Usuario</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombreusuario">Nombres</label>
<input type="text" name="nombreusuario" value="{{ isset($usuario->nombreusuario)?$usuario->nombreusuario:old('usuario')}}" id="nombreusuario">
<br>
<label for="apellidousuario">Apellidos</label>
<input type="text" name="apellidousuario" value="{{ isset($usuario->apellidousuario)?$usuario->apellidousuario:old('usuario')}}" id="apellidousuario">
<br>
<label for="tipodocumento">tipodocumentos</label>
<input type="text" name="tipodocumento" value="{{ isset($usuario->tipodocumento)?$usuario->tipodocumento:old('usuario')}}"id="tipodocumento">
<br>
<label for="documentousuario">Documentos</label>
<input type="number" name="documentousuario" value="{{isset($usuario->documentousuario)?$usuario->documentousuario:old('usuario')}}" id="documentousuario">
<br>
<label for="correousuario">Correo</label>
<input type="text" name="correousuario" value="{{isset($usuario->correousuario)?$usuario->correousuario:old('usuario')}}" id="correousuario">
<br>
<label for="telefonousuario">Telefono</label>
<input type="number" name="telefonousuario" value="{{isset($usuario->telefonousuario)?$usuario->telefonousuario:old('usuario')}}" id="telefonousuario">
<br>
<label for="rolusuario">Rol</label>
<input type="text" name="rolusuario" value="{{isset($usuario->rolusuario)?$usuario->rolusuario:old('rol')}}" id="rolusuario">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('usuarios/')}}">Volver</a>