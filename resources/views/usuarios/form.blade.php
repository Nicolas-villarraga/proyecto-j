
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

<label for=usuario">Usuario</label>
<input type="text" name="usuario" value="{{ isset($usuario->usuario)?$usuario->usuario:old('usuario')}}" id="usuario">
<br>
<label for="contraseña">Contraseña</label>
<input type="password" name="contraseña" value="{{ isset($usuario->contraseña)?$usuario->contraseña:old('contraseña')}}" id="contraseña">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('usuarios/')}}">Volver</a>