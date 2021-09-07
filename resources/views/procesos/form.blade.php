
<h2>{{$modo}} Proceso</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif
<br>
<label for="fechaproceso">Fecha</label>
<input type="date" name="fechaproceso" value="{{ isset($proceso->fechaproceso)?$proceso->fechaproceso:old('fechaproceso')}}"id="fechaproceso">
<br>
<label for="observacionesproceso">Observaciones</label>
<input type="text" name="observacionesproceso" value="{{ isset($proceso->observacionesproceso)?$proceso->observacionesproceso:old('observacionesproceso')}}"id="observacionesproceso">
<br>
<label for="id_Doctor">Doctor</label>
<select name="id_Doctor" id="id_Doctor">
@foreach ($doctores as $doctor)
   <option value="{{$doctor->id}}">{{$doctor->nombredoctor}}</option>
@endforeach
</select>
<br>
<label for="id_Historiaclinicas">Historia</label>
<select name="id_Historiaclinicas" id="id_Historiaclinicas">
  @foreach ($historiaclinicas as $historiaclinica)
      <option value="{{$historiaclinica->id}}">{{$historiaclinica->id}}</option>
  @endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('procesos/')}}">Volver</a>