
<h2> {{ $modo }} producto </h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>

@endif

<label for="nombreproducto"> Nombre Producto</label>
<input type="text" name="nombreproducto" value="{{ isset($producto->nombreproducto)?$producto->nombreproducto:'' }}" id="nombreproducto">
<br>

<label for="descripcionproducto"> Descripciòn Producto</label>
<input type="text" name="descripcionproducto" value="{{ isset($producto->descripcionproducto)?$producto->descripcionproducto:'' }}" id="descripcionproducto"> 
<br>
<label for="preciocompraproducto"> Precio compra producto</label>
<input type="number" name="preciocompra" value="{{ isset($producto->preciocompra)?$producto->preciocompra:'' }}" id="preciocompra" >
<br>
<label for="precioventaproducto"> Precio Venta Producto</label>
<input type="number" name="precioventa" value="{{ isset($producto->precioventa)?$producto->precioventa:'' }}" id="precioventa">
<br>
<label for="cantidadproducto"> Cantidad producto</label>
<input type="number" name="cantidadproducto" value="{{ isset($producto->cantidadproducto)?$producto->cantidadproducto:'' }}" id="cantidadproducto">
<br>
<label for="fotoproducto"> Foto producto </label> 
@if (isset($producto->fotoproducto))
<img src="{{ asset('storage').'/'.$producto->fotoproducto}}" width="100" alt=""> 
@endif
<input type="file" name="fotoproducto" value="" id="fotoproducto"> 
<br> 
<input type="submit" value="{{ $modo }} datos ">

<a href="{{ url('productos/') }}"> Regresar </a>

<br>