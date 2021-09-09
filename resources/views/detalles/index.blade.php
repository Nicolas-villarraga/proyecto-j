@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
@endsection
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

<table  id="detalle"   class="table table-striped table-bordered" style="width:100%">
    <thead class=" bg-primary text-white">
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
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#detalle').DataTable();
        } );
    </script>
    @endsection
</table>
</div>
@endsection
