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

<a href="{{url('doctors/create')}}">Nuevo Doctor</a>

<table  id="doctor"  class="table table-striped table-bordered" style="width:100%">
    <thead class=" bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Especialidad</th>
            <th>Tipo de Documento</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
        <tr>
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->nombredoctor}}</td>
            <td>{{$doctor->apellidodoctor}}</td>
            <td>{{$doctor->Especialidad->nombreespecialidad}}</td>
            <td>{{$doctor->Tipodocumento->nombredocumento}}</td>
            <td>{{$doctor->documentodoctor}}</td>
            <td>{{$doctor->correodoctor}}</td>
            <td>
                
                <a href="{{url('/doctors/'.$doctor->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/doctors/'.$doctor->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/doctors/'.$doctor->id)}}">
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
        $('#doctor').DataTable();
        } );
    </script>
    @endsection

</table>
<a class="btn btn-outline-warning" href="{{url('/citas/')}}">Citas</a>
<a class="btn btn-outline-warning" href="{{url('/productos/')}}">inventario</a>
<a class="btn btn-outline-warning" href="{{url('/historiaclinicas/')}}">Historias</a>
<a class="btn btn-outline-warning" href="{{url('/pacientes/')}}">Pacientes</a>
<a class="btn btn-outline-warning" href="{{url('/pedidos/')}}">Pedidos</a>
<a class="btn btn-outline-warning" href="{{url('/proveedors/')}}">Proveedores</a>
</div>
@endsection
