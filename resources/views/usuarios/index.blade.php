<h2>lista de usuarioss</h2>

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

<a href="{{url('usuarios/create')}}">Nueva usuario</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>usuario</th>
            <th>contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->usuario}}</td>
            <td>{{$usuario->contraseña}}</td>
            
            <td>
                
                <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/usuarios/'.$usuario->id ) }}" method="post">
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
