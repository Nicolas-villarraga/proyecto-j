
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

<label for=nombrepaciente">Nombres</label>
<input type="text" name="nombrepaciente" value="{{ isset($paciente->nombrepaciente)?$paciente->nombrepaciente:old('nombre')}}" id="nombrepaciente">
<br>
<label for="apellidopaciente">Apellidos</label>
<input type="text" name="apellidopaciente" value="{{ isset($paciente->apellidopaciente)?$paciente->apellidopaciente:old('apellido')}}" id="apellidopaciente">
<br>
<label for="id_Tipodocumento">Tipo documento</label>
<input type="select" name="id_Tipodocumento" value="{{ isset($paciente->id_Tipodocumento)?$paciente->id_Tipodocumento:old('tipodocumento')}}"id="id_Tipodocumento">
<br>
<label for="documentopaciente">Documento</label>
<input type="text" name="documentopaciente" value="{{ isset($paciente->documentopaciente)?$paciente->documentopaciente:old('documentopaciente')}}"id="documentopaciente">
<br>
<label for="correopaciente">Correo</label>
<input type="text" name="correopaciente" value="{{ isset($paciente->correopaciente)?$paciente->correopaciente:old('correopaciente')}}"id="correopaciente">
<br>
<label for="telefonopaciente">Telefono</label>
<input type="number" name="telefonopaciente" value="{{ isset($paciente->telefonopaciente)?$paciente->telefonopaciente:old('telefonopaciente')}}"id="telefonopaciente">
<br>
<label for="acudientepaciente">Acudiente</label>
<input type="text" name="acudientepaciente" value="{{ isset($paciente->acudientepaciente)?$paciente->acudientepaciente:old('acudientepaciente')}}"id="acudientepaciente">
<br>
<label for="contraseña">contraseña</label>
<input type="password" name="contraseña" value="{{ isset($paciente->contraseña)?$paciente->contraseña:old('contraseña')}}"id="contraseña">
<br>
<label for="id_Estado">Estado</label>
<input type="select" name="id_Estado" value="{{ isset($paciente->id_Estado)?$paciente->id_Estado:old('estado')}}"id="id_Estado">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('pacientes/')}}">Volver</a>