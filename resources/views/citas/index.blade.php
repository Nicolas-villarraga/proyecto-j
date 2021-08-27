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

<a href="{{url('citas/create')}}">Nueva cita</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Especialidad</th>
            <th>doctor</th>
            <th>fecha</th>
            <th>hora</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->id_Especialidad}}</td>
            <td>{{$cita->id_Doctor}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td>
            <td>
                
                <a href="{{url('/citas/'.$cita->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/citas/'.$cita->id ) }}" method="post">
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
