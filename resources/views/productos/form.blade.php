
<h2>{{$modo}} Producto</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="nombreproducto">Nombre</label>
<input type="text" name="nombreproducto" value="{{ isset($producto->nombreproducto)?$producto->nombreproducto:old('nombreproducto')}}" id="nombreproducto">
<br>
<label for="descripcionproducto">Descripcion</label>
<input type="text" name="descripcionproducto" value="{{ isset($producto->descripcionproducto)?$producto->descripcionproducto:old('descripcionproducto')}}" id="descripcionproducto">
<br>
<label for="preciocompra">Precio inicial</label>
<input type="number" name="preciocompra" value="{{ isset($producto->preciocompra)?$producto->preciocompra:old('fpreciocompra')}}"id="preciocompra">
<br>
<label for="precioventa">Precio final</label>
<input type="number" name="precioventa" value="{{isset($producto->precioventa)?$producto->precioventa:old('precioventa')}}" id="precioventa">
<br>
<label for="cantidadproducto">Cantidad</label>
<input type="number" name="cantidadproducto" value="{{isset($producto->cantidadproducto)?$producto->cantidadproducto:old('cantidad')}}" id="cantidadproducto">
<br>
<label for="id_Proveedor">Proveedor</label>
<select name="id_Proveedor" id="id_Proveedor">
  @foreach ($proveedors as $proveedor)
      <option value="{{$proveedor->id}}">{{$proveedor->marcaproveedor}}</option>
  @endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('productos/')}}">Volver</a>