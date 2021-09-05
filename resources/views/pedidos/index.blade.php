<h2>lista de pedidos</h2>

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

<a href="{{url('pedidos/create')}}">Nueva Pedido</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Total</th>
            <th>Observacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->fechapedido}}</td>
            <td>{{$pedido->horapedido}}</td>
            <td>{{$pedido->totalpedido}}</td>
            <td>{{$pedido->observacionespedido}}</td>
            <td>
                <a href="{{url('/pedidos/'.$pedido->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/pedidos/'.$pedido->id ) }}" method="post">
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
