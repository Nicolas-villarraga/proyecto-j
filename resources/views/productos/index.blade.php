mostrar la lista de productos :)
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>id producto</th>
            <th>foto producto</th>
            <th>Nombre producto</th>
            <th>descripcion producto</th>
            <th>precio compra producto</th>
            <th>precio venta producto</th>
            <th>cantidad producto</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $productos as $producto ) 
            
        <tr>
            <td>{{ $producto->idproducto }}</td>
            <td>{{ $producto->fotoproducto }}</td>
            <td>{{ $producto->nombreproducto }}</td>
            <td>{{ $producto->descripcionproducto }}</td>
            <td>{{ $producto->preciocompraproducto }}</td>
            <td>{{ $producto->precioventaproducto }}</td>
            <td>{{ $producto->cantidadproducto }}</td>
            <td>Editar | 
            
            <form action="{{ url('/productos/'.$producto->id ) }}" method="post">
            @csrf 
            {{ method_field ('DELETE') }}
            <input type="submit" onclick="return confirm('quiere borrar producto?')" 
             value="Borrar">   
            
            </form>
            
            
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>