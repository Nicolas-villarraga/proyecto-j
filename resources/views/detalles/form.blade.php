
<h2>{{$modo}} Detalle</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="id_Producto">Nombre de Producto</label>
<select name="id_Producto" id="id_Producto">
  @foreach ($productos as $producto)
      <option value="{{$producto->id}}">{{$producto->nombreproducto}}</option>
  @endforeach
</select>
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
<label for="id_Pedido">Pedido</label>
<select name="id_Pedido" id="id_Pedido">
  @foreach ($pedidos as $pedido)
      <option value="{{$pedido->id}}">{{$pedido->id}}</option>
  @endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('detalles/')}}">Volver</a>