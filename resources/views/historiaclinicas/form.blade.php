
<h2>{{$modo}} historiaclinica</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="fechacreacionhistoria">fecha</label>
<input type="date" name="fechacreacionhistoria" value="{{ isset($historiaclinica->fechacreacionhistoria)?$historiaclinica->fechacreacionhistoria:old('fecha')}}" id="fechacreacionhistoria">
<br>
<label for="descripcionhistoriaclinica">Descripcion</label>
<input type="text" name="descripcionhistoriaclinica" value="{{ isset($historiaclinica->descripcionhistoriaclinica)?$historiaclinica->descripcionhistoriaclinica:old('descripcion')}}" id="descripcionhistoriaclinica">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('historiaclinicas/')}}">Volver</a>