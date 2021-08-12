Formulario de creación de producto

<form action="{{ url('/productos')  }}" method="post" enctype="multipart/form-data" >
@csrf

<label for="nombreproducto"> Nombre Producto</label>
<input type="text" name="nombreproducto" id="nombreproducto">
<br>

<label for="descripcionproducto"> Descripciòn Producto</label>
<input type="text" name="descripcionproducto" id="descripcionproducto"> 
<br>

<label for="preciocompraproducto"> Precio compra producto</label>
<input type="number" name="preciocompraproducto" id="preciocompraproducto" >
<br>

<label for="precioventaproducto"> Precio Venta Producto</label>
<input type="number" name="precioventaproducto" id="precioventaproducto">
<br>

<label for="cantidadproducto"> Cantidad producto</label>
<input type="number" name="cantidadproducto" id="cantidadproducto">
<br>

<label for="fotoproducto"> Foto producto </label> 
<input type="file" name="fotoproducto" id="fotoproducto"> 
<br> 

<input type="submit" value="Guardar datos ">
<br>

</form>