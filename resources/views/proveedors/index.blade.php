<h2>lista de proveedores</h2>

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

<a href="{{url('proveedors/create')}}">Nuevo proveedor</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>NIT</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Corrreo</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proveedors as $proveedor)
        <tr>
            <td>{{$proveedor->id}}</td>
            <td>{{$proveedor->nitproveedor}}</td>
            <td>{{$proveedor->direccionproveedor}}</td>
            <td>{{$proveedor->telefonoproveedor}}</td>
            <td>{{$proveedor->correoproveedor}}</td>
            <td>{{$proveedor->marcaproveedor}}</td>
            <td>{{$proveedor->nombreproveedor}}</td>
            <td>
                
                <a href="{{url('/proveedors/'.$proveedor->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/proveedors/'.$proveedor->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/proveedors/'.$proveedor->id)}}">Detalles</a>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
