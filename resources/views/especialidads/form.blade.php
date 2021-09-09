
<h2>{{$modo}} Especialidad</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombreespecialidad">Nombre de Especialidad</label>
<input type="text" name="nombreespecialidad" value="{{ isset($especialidad->nombreespecialidad)?$especialidad->nombreespecialidad:old('especialidad')}}" id="nombreespecialidad">
<br>

<input type="submit" value="{{$modo}}">

<a href="{{url('especialidads/')}}">Volver</a>