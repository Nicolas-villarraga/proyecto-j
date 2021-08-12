
<h2>{{$modo}} Acudiente</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombreacudiente">Nombre</label>
<input type="text" name="nombreacudiente" value="{{ isset($acudiente->nombreacudiente)?$acudiente->nombreacudiente:old('acudiente')}}" id="nombreacudiente">
<br>
<label for="tipodocumentopaciente">Tipo documento</label>
<input type="text" name="tipodocumentopaciente" value="{{ isset($acudiente->tipodocumentopaciente)?$acudiente->tipodocumentopaciente:old('acudiente')}}" id="tipodocumentopaciente">
<br>
<label for="documentoacudiente">Documento</label>
<input type="number" name="documentoacudiente" value="{{ isset($acudiente->documentoacudiente)?$acudiente->documentoacudiente:old('acudiente')}}"id="documentoacudiente">
<br>
<label for="parentescoacudiente">Parentesco</label>
<input type="text" name="parentescoacudiente" value="{{isset($acudiente->parentescoacudiente)?$acudiente->parentescoacudiente:old('acudiente')}}" id="parentescoacudiente">
<br>
<label for="telefonoacudiente">Telefono</label>
<input type="number" name="telefonoacudiente" value="{{isset($acudiente->telefonoacudiente)?$acudiente->telefonoacudiente:old('acudiente')}}" id="telefonoacudiente">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('citas/')}}">Volver</a>