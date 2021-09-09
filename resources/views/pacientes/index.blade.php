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

<a href="{{url('pacientes/create')}}">Nuevo paciente</a>

<table  id="paciente"   class="table table-striped table-bordered" style="width:100%">
    <thead class=" bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipodocumento</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>Acudiente</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->nombrepaciente}}</td>
            <td>{{$paciente->apellidopaciente}}</td>
            <td>{{$paciente->tipodocumento->nombredocumento}}</td>
            <td>{{$paciente->documentopaciente}}</td>
            <td>{{$paciente->telefonopaciente}}</td>
            <td>{{$paciente->acudientepaciente}}</td>
            <td>{{$paciente->correopaciente}}</td>
            <td>
                
                <a class="btn btn-outline-warning" href="{{url('/pacientes/'.$paciente->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/pacientes/'.$paciente->id) }}" method="post">
                @csrf
                @method('DELETE') 
                <input class="btn btn-outline-warning" type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                
                <a class="btn btn-outline-warning" href="{{url('/pacientes/'.$paciente->id)}}">
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
        $('#paciente').DataTable();
        } );
    </script>
    @endsection
</table>
</div>
@endsection
