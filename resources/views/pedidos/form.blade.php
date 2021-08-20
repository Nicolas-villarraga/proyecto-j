
<h2>{{$modo}} Pedido</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="fecha">fecha</label>
<input type="date" name="fecha" value="{{ isset($pedido->fecha)?$pedido->fecha:old('fecha')}}" id="fecha">
<br>
<label for="hora">hora</label>
<input type="time" name="hora" value="{{ isset($pedido->hora)?$pedido->hora:old('hora')}}" id="hora">
<br>
<label for="totalpedido">Total</label>
<input type="number" name="totalpedido" value="{{ isset($pedido->totalpedido)?$pedido->totalpedido:old('total')}}" id="totalpedido">
<br>
<label for="observacionespedido">Observaciones</label>
<input type="longtext" name="observacionespedido" value="{{ isset($pedido->observacionespedido)?$pedido->observacionespedido:old('observacionespedido')}}" id="observacionespedido">
<br>

<input type="submit" value="{{$modo}}">

<a href="{{url('pedidos/')}}">Volver</a>