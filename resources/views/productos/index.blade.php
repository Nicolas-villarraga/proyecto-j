<h2>listadeProductos</h2>

@extends('layouts.app')
@section('content')
<div class="container">



<div class="alert alert-success alert-dismissible" role="alert">
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

<a href="{{ url('productos/create') }}"> Registrar nuevo Producto </a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>id producto</th>
            <th>foto producto</th>
            <th>Nombre producto</th>
            <th>descripcion producto</th>
            <th>precio compra </th>
            <th>precio venta </th>
            <th>cantidad producto</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $productos as $producto )
            
        <tr>
            <td>{{ $producto->id}}</td>

            <td>
            <img src="{{ asset('storage').'/'.$producto->fotoproducto}}" width="100" alt="">    
            </td>

            <td>{{ $producto->nombreproducto }}</td>
            <td>{{ $producto->descripcionproducto }}</td>
            <td>{{ $producto->preciocompra }}</td>
            <td>{{ $producto->precioventa }}</td>
            <td>{{ $producto->cantidadproducto }}</td>
            <td>
              
            <a href="{{ url('/productos/'.$producto->id.'/edit') }}">
                Editar
            </a>    
             
            
            <form action="{{ url('/productos/'.$producto->id ) }}" method="post">
            @csrf 
            {{ method_field ('DELETE') }}
            <input type="submit" onclick="return confirm('¿quiere borrar producto?')" 
             value="Borrar">   
            
            </form>
            
            
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection