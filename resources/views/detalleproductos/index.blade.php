<h2>lista de detalle producto</h2>

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

<a href="{{url('detalleproductos/create')}}">Nuevo detalle</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Valor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detalleproductos as $detalleproducto)
        <tr>
            <td>{{$detalleproducto->id}}</td>
            <td>{{$detalleproducto->nombreproducto}}</td>
            <td>{{$detalleproducto->descripcionproducto}}</td>
            <td>{{$detalleproducto->cantidadproducto}}</td>
            <td>{{$detalleproducto->valorproducto}}</td>
            <td>
                
                <a href="{{url('/detalleproductos/'.$detalleproducto->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/detalleproductos/'.$detalleproducto->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit"   onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
