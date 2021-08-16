
<h2> {{ $modo }} Proveedor </h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>

@endif

<label for="nitproveedor"> Nit Proveedor</label>
<input type="number" name="nitproveedor" value="{{ isset($proveedor->nitproveedor)?$proveedor->nitproveedor:'' }}" id="nitproveedor">
<br>
<label for="direccionproveedor"> Direcciòn Proveedor </label>
<input type="text" name="direccionproveedor" value="{{ isset($proveedor->direccionproveedor)?$proveedor->direccionproveedor:'' }}" id="direccionproveedor"> 
<br>
<label for="telefonoproveedor"> Telefono Proveedor</label>
<input type="number" name="telefonoproveedor" value="{{ isset($proveedor->telefonoproveedor)?$proveedor->telefonoproveedor:'' }}" id="telefonoproveedor" >
<br>
<label for="correoproveedor"> Correo Proveedor </label>
<input type="text" name="correoproveedor" value="{{ isset($proveedor->correoproveedor)?$proveedor->correoproveedor:'' }}" id="correoproveedor">
<br>
<label for="marcaproveedor"> Marcar del proveedor</label>
<input type="text" name="marcaproveedor" value="{{ isset($proveedor->marcaproveedor)?$proveedor->marcaproveedor:'' }}" id="marcaproveedor">
<br>
<label for="nombreproveedor"> Nombre del Proveedor</label>
<input type="text" name="nombreproveedor" value="{{ isset($proveedor->nombreproveedor)?$proveedor->nombreproveedor:'' }}" id="nombreproveedor">
<br> 
<input type="submit" value="{{ $modo }} datos ">

<a href="{{ url('proveedores/') }}"> Regresar </a>

<br>