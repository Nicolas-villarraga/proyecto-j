lista de citas

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

<a href="{{url('doctors/create')}}">Nuevo Doctor</a>

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
        @foreach ($doctors as $doctor)
        <tr>
            <td>{{$doctor->iddoctor}}</td>
            <td>{{$doctor->nombredoctor}}</td>
            <td>{{$doctor->apellidodoctor}}</td>
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

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
