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
            <th>fecha</th>
            <th>Hora</th>
            <th>Especialidad</th>
            <th>doctor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td>
            <td>{{$cita->Especialidad->nombreespecialidad}}</td>
            <td>{{$cita->Doctor->nombredoctor}}</td>
            <td>{{$cita->Paciente->nombrepaciente}}</td>
            <td>{{$cita->Estado->nombreestado}}</td>
            
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
<a class="btn btn-outline-warning" href="{{url('/procesos/')}}">Procesos</a>
<a class="btn btn-outline-warning" href="{{url('/detalles/')}}">Detalle de Pedidos</a>
</div>
@endsection
