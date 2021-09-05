
<h2>{{$modo}} Paciente</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="nombrepaciente">Nombres</label>
<input type="text" name="nombrepaciente" value="{{ isset($paciente->nombrepaciente)?$paciente->nombrepaciente:old('nombre')}}" id="nombrepaciente">
<br>
<label for="apellidopaciente">Apellidos</label>
<input type="text" name="apellidopaciente" value="{{ isset($paciente->apellidopaciente)?$paciente->apellidopaciente:old('apellido')}}" id="apellidopaciente">
<br>
<label for="id_Tipodocumento">Tipo documento</label>
<select name="id_Tipodocumento" id="id_Tipodocumento">
  @foreach ($tipodocumentos as $tipodocumento)
      <option value="{{$tipodocumento->id}}">{{$tipodocumento->nombredocumento}}</option>
  @endforeach
</select>
<br>            
<label for="documentopaciente">Documento</label>
<input type="number" name="documentopaciente" value="{{ isset($paciente->documentopaciente)?$paciente->documentopaciente:old('documentopaciente')}}"id="documentopaciente">
<br>
<label for="telefonopaciente">Telefono</label>
<input type="number" name="telefonopaciente" value="{{ isset($paciente->telefonopaciente)?$paciente->telefonopaciente:old('telefonopaciente')}}"id="telefonopaciente">
<br>
<label for="acudientepaciente">Acudiente</label>
<input type="text" name="acudientepaciente" value="{{ isset($paciente->acudientepaciente)?$paciente->acudientepaciente:old('acudientepaciente')}}"id="acudientepaciente">
<br>
<label for="correopaciente">Correo</label>
<input type="email" name="correopaciente" value="{{ isset($paciente->correopaciente)?$paciente->correopaciente:old('correopaciente')}}"id="correopaciente">
<br>
<label for="contraseña">Contraseña</label>
<input type="password" name="contraseña" value="{{ isset($paciente->contraseña)?$paciente->contraseña:old('contraseña')}}"id="contraseña">
<br>
<label for="id_Genero">Genero</label>
<select name="id_Genero" id="id_Genero">
  @foreach ($generos as $genero)
      <option value="{{$genero->id}}">{{$genero->nombregenero}}</option>
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
<input type="submit" class="btn btn-outline-warning" value="{{$modo}}">

<a  class="btn btn-outline-warning" href="{{url('pacientes/')}}">Volver</a>