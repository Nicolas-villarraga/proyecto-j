mostrar la lista de pedidos


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

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