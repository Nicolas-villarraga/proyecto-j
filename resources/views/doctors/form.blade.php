
<h2>{{$modo}} Doctor</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="nombredoctor">Nombres</label>
<input type="text" name="nombredoctor" value="{{ isset($doctor->nombredoctor)?$doctor->nombredoctor:old('nombre')}}" id="nombredoctor">
<br>
<label for="apellidodoctor">Apellidos</label>
<input type="text" name="apellidodoctor" value="{{ isset($doctor->apellidodoctor)?$doctor->apellidodoctor:old('apellido')}}" id="apellidodoctor">
<br>
<label for="id_Especialidad">Especialidad</label>
<select name="id_Especialidad" id="id_Especialidad">
  @foreach ($especialidades as $especialidad)
      <option value="{{$especialidad->id}}">{{$especialidad->nombreespecialidad}}</option>
  @endforeach
</select>
<br>
<label for="id_Tipodocumento">Tipo de documento</label>
<select name="id_Tipodocumento" id="id_Tipodocumento">
  @foreach ($tipodocumentos as $tipodocumento)
      <option value="{{$tipodocumento->id}}">{{$tipodocumento->nombredocumento}}</option>
  @endforeach
</select>
<br>
<label for="documentodoctor">Documento</label>
<input type="number" name="documentodoctor" value="{{ isset($doctor->documentodoctor)?$doctor->documentodoctor:old('documentodoctor')}}" id="documentodoctor">
<br>
<label for="correodoctor">Correo</label>
<input type="text" name="correodoctor" value="{{ isset($doctor->correodoctor)?$doctor->correodoctor:old('correodoctor')}}" id="correodoctor">
<br>
<label for="contraseña">contraseña</label>
<input type="password" name="contraseña" value="{{ isset($doctor->contraseña)?$doctor->contraseña:old('contraseña')}}" id="contraseña">
<br>
<label for="id_Genero">Genero</label>
<select name="id_Genero" id="id_Genero">
  @foreach ($generos as $genero)
      <option value="{{$genero->id}}">{{$genero->nombregenero}}</option>
  @endforeach
</select>
<br>
<label for="id_rol">Rol</label>
<select name="id_rol" id="id_rol">
  @foreach ($rols as $rol)
      <option value="{{$rol->id}}">{{$rol->nombrerol}}</option>
  @endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('doctors/')}}">Volver</a>