
<h2>{{$modo}} Proveedores</h2>


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>





@endif

<label for="nitproveedor">Nit</label>
<input type="text" name="nitproveedor" value="{{ isset($proveedor->nitproveedor)?$proveedor->nitproveedor:old('nit')}}" id="nitproveedor">
<br>
<label for="direccionproveedor">Direccion</label>
<input type="text" name="direccionproveedor" value="{{ isset($proveedor->direccionproveedor)?$proveedor->direccionproveedor:old('direccion')}}" id="direccionproveedor">
<br>
<label for="telefonoproveedor">Telefono</label>
<input type="number" name="telefonoproveedor" value="{{ isset($proveedor->telefonoproveedor)?$proveedor->telefonoproveedor:old('telefono')}}"id="telefonoproveedor">
<br>
<label for="correoproveedor">Correo</label>
<input type="text" name="correoproveedor" value="{{isset($proveedor->correoproveedor)?$proveedor->correoproveedor:old('correo')}}" id="correoproveedor">
<br>
<label for="marcaproveedor">Marca</label>
<input type="text" name="marcaproveedor" value="{{isset($proveedor->marcaproveedor)?$proveedor->marcaproveedor:old('marca')}}" id="marcaproveedor">
<br>
<label for="nombreproveedor">Nombre</label>
<input type="text" name="nombreproveedor" value="{{isset($proveedor->nombreproveedor)?$proveedor->nombreproveedor:old('nombre')}}" id="nombreproveedor">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('proveedors/')}}">Volver</a>