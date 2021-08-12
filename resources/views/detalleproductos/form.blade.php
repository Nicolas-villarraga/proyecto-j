
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

<label for=nombreproducto">Nombre de producto</label>
<input type="text" name="nombreproducto" value="{{ isset($detalleproducto->nombreproducto)?$detalleproducto->nombreproducto:old('nombreproducto')}}" id="nombreproducto">
<br>
<label for="descripcionproducto">Descripcion</label>
<input type="text" name="descripcionproducto" value="{{ isset($detalleproducto->descripcionproducto)?$detalleproducto->descripcionproducto:old('descripcionproducto')}}" id="descripcionproducto">
<br>
<label for="cantidadproducto">Cantidad</label>
<input type="number" name="cantidadproducto" value="{{ isset($detalleproducto->cantidadproducto)?$detalleproducto->cantidadproducto:old('cantidadproducto')}}"id="cantidadproducto">
<br>
<label for="valorproducto">valor</label>
<input type="number" name="valorproducto" value="{{isset($detalleproducto->valorproducto)?$detalleproducto->valorproducto:old('valorproducto')}}" id="valorproducto">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('detalleproductos/')}}">Volver</a>