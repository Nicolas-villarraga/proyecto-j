<h2>lista de productos</h2>

@extends('layouts.app')
@section('content')
<div class="container">



<div class="alert alert-success alert-dismissible" role="alert">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<a href="{{url('productos/create')}}">Nuevo producto</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio Inicial</th>
            <th>Precio Final</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombreproducto}}</td>
            <td>{{$producto->descripcionproducto}}</td>
            <td>{{$producto->preciocompra}}</td>
            <td>{{$producto->precioventa}}</td>
            <td>{{$producto->cantidadproducto}}</td>
            <td>
                
                <a href="{{url('/productos/'.$producto->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/productos/'.$producto->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
