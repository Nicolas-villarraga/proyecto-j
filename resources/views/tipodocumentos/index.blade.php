<h2>lista de Documentos</h2>

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

<a href="{{url('tipodocumentos/create')}}">Nuevo Documento</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Tipo de Documento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipodocumentos as $tipodocumento)
        <tr>
            <td>{{$tipodocumento->id}}</td>
            <td>{{$tipodocumento->nombretipodocumento}}</td>
            <td>
                
                <a href="{{url('/tipodocumentos/'.$tipodocumento->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/tipodocumentos/'.$tipodocumento->id ) }}"  method="post">
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
