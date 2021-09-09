
<h2>{{$modo}} historiaclinica</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="fechadecreacionhistoria">fecha</label>
<input type="date" name="fechadecreacionhistoria" value="{{ isset($historiaclinica->fechadecreacionhistoria)?$historiaclinica->fechadecreacionhistoria:old('fecha')}}" id="fechadecreacionhistoria">
<br>
<label for="id_Doctor">Doctor</label>
<select name="id_Doctor" id="id_Doctor">
  @foreach ($doctores as $doctor)
      <option value="{{$doctor->id}}">{{$doctor->nombredoctor}}</option>
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
<div class="mb-3">
  <label for="descripcionhistoria" class="form-label">Descripcion</label>
  <textarea  type="text" name="descripcionhistoria" value="{{ isset($historiaclinica->descripcionhistoria)?$historiaclinica->descripcionhistoria:old('descripcion')}}" id="descripcionhistoria" rows="8"></textarea>
</div>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('historiaclinicas/')}}">Volver</a>