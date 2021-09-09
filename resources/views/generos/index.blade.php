<h2>lista de Gneros</h2>

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

<a href="{{url('generos/create')}}">Nuevo Genero</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre Genero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($generos as $genero)
        <tr>
            <td>{{$genero->id}}</td>
            <td>{{$genero->nombregenero}}</td>
            <td>
                
                <a href="{{url('/generos/'.$genero->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/generos/'.$genero->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a href="{{url('/generos/'.$genero->id)}}">Detalle</a>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
