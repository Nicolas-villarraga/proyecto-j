<h2>Historia</h2>

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

<a href="{{url('historiaclinicas/create')}}">Nueva Historia</a> 
<form class="d-flex">
    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-warning" type="submit">Buscar</button>
  </form>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Doctor</th>
            <th>Paciente</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($historiaclinicas as $historiaclinica)
        <tr>
            <td>{{$historiaclinica->id}}</td>
            <td>{{$historiaclinica->fechacreacionhistoria}}</td>
            <td>{{$historiaclinica->doctor->nombredoctor}}</td>
            <td>{{$historiaclinica->paciente->nombrepaciente}}</td>
            <td>{{$historiaclinica->descripcionhistoriaclinica}}</td>
            <td>
                
                <a  href="{{url('/historiaclinicas/'.$historiaclinica->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form  action="{{ url('/historiaclinicas/'.$historiaclinica->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input  type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>



            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-outline-warning" href="{{url('/pacientes/')}}">Pacientes</a>
<a class="btn btn-outline-warning" href="{{url('/procesos/')}}">Procesos</a>
</div>
@endsection
