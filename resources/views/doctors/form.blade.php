
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
<input type="submit" value="{{$modo}}">

<a href="{{url('doctors/')}}">Volver</a>