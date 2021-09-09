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

<a class="btn btn-outline-warning" href="{{url('detalles/create')}}">Nuevo detalle</a>

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
        @foreach ($detalles as $detalle)
        <tr>
            <td>{{$detalle->id}}</td>
            <td>{{$detalle->producto->nombreproducto}}</td>
            <td>{{$detalle->descripcionproducto}}</td>
            <td>{{$detalle->cantidadproducto}}</td>
            <td>{{$detalle->valorproducto}}</td>

            <td>
                
                <a class="btn btn-outline-warning" href="{{url('/detalles/'.$detalle->id.'/edit')}}">
                    Editar
                </a>
                <form action="{{ url('/detalles/'.$detalle->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit"   onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a class="btn btn-outline-warning" href="{{url('/detalles/'.$detalle->id)}}">
                    Detalles
                </a>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
