
<h2>{{$modo}} Genero</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombregenero">Especialidad</label>
<input type="text" name="nombregenero" value="{{ isset($genero->nombregenero)?$genero->nombregenero:old('genero')}}" id="nombregenero">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('generos/')}}">Volver</a>