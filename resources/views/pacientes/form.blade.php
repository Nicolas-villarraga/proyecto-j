
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

<label for=nombrepaciente">Nombres</label>
<input type="text" name="nombrepaciente" value="{{ isset($paciente->nombrepaciente)?$paciente->nombrepaciente:old('nombre')}}" id="nombrepaciente">
<br>
<label for="apellidopaciente">Apellidos</label>
<input type="text" name="apellidopaciente" value="{{ isset($paciente->apellidopaciente)?$paciente->apellidopaciente:old('apellido')}}" id="apellidopaciente">
<br>
<label for="tipodocumento">Tipo documento</label>
<input type="text" name="tipodocumento" value="{{ isset($paciente->tipodocumento)?$paciente->tipodocumento:old('tipodocumento')}}"id="tipodocumento">
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
<label for="estado">Estado</label>
<input type="text" name="estado" value="{{ isset($paciente->estado)?$paciente->estado:old('estado')}}"id="estado">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('pacientes/')}}">Volver</a>