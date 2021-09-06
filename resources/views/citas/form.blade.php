
<h2>{{$modo}} Cita</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="id_Doctor">Doctor</label>
<select name="id_Doctor" id="id_Doctor">
@foreach ($doctores as $doctor)
   <option value="{{$doctor->id}}">{{$doctor->nombredoctor}}</option>
@endforeach
</select>
<br>
<label for="fecha">Fecha</label>
<input type="date" name="fecha" value="{{ isset($cita->fecha)?$cita->fecha:old('fecha')}}"id="fecha">
<br>
<label for="hora">Hora</label>
<input type="time" name="hora" value="{{ isset($cita->hora)?$cita->hora:old('hora')}}"id="hora">
<br>
<label for="id_Especialidad">Especialidad</label>
<select name="id_Especialidad" id="id_Especialidad">
  @foreach ($especialistas as $especialista)
      <option value="{{$especialista->id}}">{{$especialista->nombreespecialidad}}</option>
  @endforeach
</select>
<br>
<label for="id_Paciente">Paciente</label>
<select name="id_Paciente" id="id_Paciente">
  @foreach ($pacientes as $paciente)
      <option value="{{$paciente->id}}">{{$paciente->nombrepaciente}}</option>
  @endforeach
</select>
<br>
<label for="id_Estado">Estado</label>
<select name="id_Estado" id="id_Estado">
  @foreach ($estados as $estado)
      <option value="{{$estado->id}}">{{$estado->nombreestado}}</option>
  @endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('citas/')}}">Volver</a>