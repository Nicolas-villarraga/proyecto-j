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

<a href="{{url('procesos/create')}}">Nueva Proceso</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>fecha</th>
            <th>observaciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($procesos as $proceso)
        <tr>
            <td>{{$proceso ->id}}</td>
            <td>{{$proceso->fechaproceso}}</td>
            <td>{{$proceso->observacionesdeproceso}}</td>
            <td>{{$proceso->Doctor->nombredoctor}}</td>
            
            <td>
                
                <a href="{{url('/procesos/'.$proceso->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/procesos/'.$proceso->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/procesos/'.$proceso->id)}}">Detalles</a>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
