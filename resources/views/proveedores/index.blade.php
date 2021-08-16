<h2>lista de Proveedores</h2>

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




<a href="{{ url('proveedores/create') }}"> Registrar nuevo Proveedor </a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>id Proveedor</th>
            <th>Nit Proveedor</th>
            <th>Direcciòn Proveedor</th>
            <th>Telefono Proveedor</th>
            <th>Correo Proveedor</th>
            <th>Marca Proveedor</th>
            <th>Nombre Proveedor</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $proveedores as $proveedor )
            
        <tr>
            <td>{{ $proveedor->id}}</td>
            <td>{{ $proveedor->nitproveedor }}</td>
            <td>{{ $proveedor->direccionproveedor }}</td>
            <td>{{ $proveedor->telefonoproveedor }}</td>
            <td>{{ $proveedor->correoproveedor }}</td>
            <td>{{ $proveedor->marcaproveedor }}</td>
            <td>{{ $proveedor->nombreproveedor }}</td>
            <td>
              
            <a href="{{ url('/proveedores/'.$proveedor->id.'/edit') }}">
                Editar
            </a>    
             
            
            <form action="{{ url('/proveedores/'.$proveedor->id ) }}" method="post">
            @csrf 
            {{ method_field ('DELETE') }}
            <input type="submit" onclick="return confirm('¿quiere borrar proveedor?')" 
             value="Borrar">   
            
            </form>
            
            
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection