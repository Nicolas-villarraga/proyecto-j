<h2>lista de especialidades</h2>

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

<a href="{{url('especialidads/create')}}">Nueva especialidad</a>

<table class="table table-dark">
    <thead class="thead-dark">
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



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
