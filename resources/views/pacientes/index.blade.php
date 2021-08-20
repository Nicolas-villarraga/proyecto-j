<h2>lista de pacientes</h2>

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

<a href="{{url('pacientes/create')}}">Nuevo paciente</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipodocumento</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acudiente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->nombrepaciente}}</td>
            <td>{{$paciente->apellidopaciente}}</td>
            <td>{{$paciente->tipodocumento}}</td>
            <td>{{$paciente->documentopaciente}}</td>
            <td>{{$paciente->correopaciente}}</td>
            <td>{{$paciente->telefonopaciente}}</td>
            <td>{{$paciente->acudientepaciente}}</td>
            <td>{{$paciente->estado}}</td>
            <td>
                
                <a href="{{url('/pacientes/'.$paciente->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/pacientes/'.$paciente->id ) }}" method="post">
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
