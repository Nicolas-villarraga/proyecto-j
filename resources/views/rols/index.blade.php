<h2>lista de roles</h2>

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

<a href="{{url('rols/create')}}">Nuevo rol</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre del rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rols as $rol)
        <tr>
            <td>{{$rol->id}}</td>
            <td>{{$rol->nombrerol}}</td>
            <td>
                
                <a href="{{url('/rols/'.$rol->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/rols/'.$rol->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/rols/'.$rol->id)}}">Detalles</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
