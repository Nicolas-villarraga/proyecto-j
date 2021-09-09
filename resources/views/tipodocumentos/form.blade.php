
<h2>{{$modo}} Documento</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombredocumento">Nombre documento</label>
<input type="text" name="nombredocumento" value="{{ isset($tipodocumento->nombredocumento)?$tipodocumento->nombredocumento:old('nombredocumento')}}" id="nombredocumento">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('tipodocumentos/')}}">Volver</a>