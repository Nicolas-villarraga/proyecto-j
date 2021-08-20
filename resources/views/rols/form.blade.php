
<h2>{{$modo}} Rol</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for=nombrerol">Rol</label>
<input type="text" name="nombrerol" value="{{ isset($rol->nombrerol)?$rol->nombrerol:old('nombrerol')}}" id="nombrerol">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('rols/')}}">Volver</a>