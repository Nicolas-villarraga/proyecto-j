<h2>lista de citas</h2>

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

<a href="{{url('acudientes/create')}}">Nueva cita</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Acudiente</th>
            <th>Tipo Ddocumento</th>
            <th>Documento </th>
            <th>Parentesco</th>
            <th>telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($acudientes as $acudiente)
        <tr>
            <td>{{$acudiente->id}}</td>
            <td>{{$acudiente->nombreacudiente}}</td>
            <td>{{$acudiente->tipodocumentopaciente}}</td>
            <td>{{$acudiente->documentoacudiente}}</td>
            <td>{{$acudiente->parentescoacudiente}}</td>
            <td>{{$acudiente->telefonoacudiente}}</td>
            <td>
                
                <a href="{{url('/acudientes/'.$acudiente->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/acudientes/'.$acudiente->id ) }}" method="post">
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
