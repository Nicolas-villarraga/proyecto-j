
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

<label for=nombretipodocumento">Nombre documento</label>
<input type="text" name="nombretipodocumento" value="{{ isset($tipodocumento->nombretipodocumento)?$tipodocumento->nombretipodocumento:old('nombretipodocumento')}}" id="nombretipodocumento">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('tipodocumentos/')}}">Volver</a>