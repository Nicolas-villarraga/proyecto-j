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

<a href="{{url('especialidads/create')}}">Nueva especialidad</a>

<table  id="especialidad"   class="table table-striped table-bordered" style="width:100%">
    <thead class=" bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($especialidads as $especialidad)
        <tr>
            <td>{{$especialidad->id}}</td>
            <td>{{$especialidad->nombreespecialidad}}</td>
            <td>
                
                <a href="{{url('/especialidads/'.$especialidad->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/especialidads/'.$especialidad->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/especialidads/'.$especialidad->id)}}">
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
        $('#especialidad').DataTable();
        } );
    </script>
    @endsection
</table>
</div>
@endsection
