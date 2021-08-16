<h2>lista de pedidos</h2>

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

<a href="{{ url('pedidos/create') }}"> Registrar nuevo Pedido </a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>id Pedido</th>
            <th>Fecha del Pedido</th>
            <th>Hora del Pedido</th>
            <th>Total Pedido</th>
            <th>Observaciones del Pedido</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $pedidos as $pedido )
            
        <tr>
            <td>{{ $pedido->id}}</td>
            <td>{{ $pedido->fecha }}</td>
            <td>{{ $pedido->hora }}</td>
            <td>{{ $pedido->totalpedido }}</td>
            <td>{{ $pedido->observacionespedido }}</td>
            <td>
              
            <a href="{{ url('/pedidos/'.$pedido->id.'/edit') }}">
                Editar
            </a>    
             
            
            <form action="{{ url('/pedidos/'.$pedido->id ) }}" method="post">
            @csrf 
            {{ method_field ('DELETE') }}
            <input type="submit" onclick="return confirm('¿quiere borrar pedido?')" 
             value="Borrar">   
            
            </form>
            
            
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection