
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

<label for="especialidad">Especialidad</label>
<input type="text" name="especialidad" value="{{ isset($cita->especialidad)?$cita->especialidad:old('especialidad')}}" id="especialidad">
<br>
<label for="doctor">Doctor</label>
<input type="text" name="doctor" value="{{ isset($cita->doctor)?$cita->doctor:old('doctor')}}" id="doctor">
<br>
<label for="fecha">Fecha</label>
<input type="date" name="fecha" value="{{ isset($cita->fecha)?$cita->fecha:old('fecha')}}"id="fecha">
<br>
<label for="hora">Hora</label>
<input type="time" name="hora" value="{{isset($cita->hora)?$cita->hora:old('hora')}}" id="hora">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('citas/')}}">Volver</a>