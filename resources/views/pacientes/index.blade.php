<h2>lista de pacientes</h2>

@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/pacientes/')}}">Paciente</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/historiaclinicas/')}}">Historial clinico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/detalleproductos/')}}">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/citas/')}}">Citas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
<div class="alert alert-success alert-dismissible" role="alert">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<a href="{{url('pacientes/create')}}">Nuevo paciente</a>
<form class="d-flex">
    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
    <a class="btn btn-outline-warning" type="submit">Buscar</a>
  </form>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipodocumento</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acudiente</th>
            <th>Estado</th>
            <th>Genero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->nombrepaciente}}</td>
            <td>{{$paciente->apellidopaciente}}</td>
            <td>{{$paciente->tipodocumento->nombretipodocumento}}</td>
            <td>{{$paciente->documentopaciente}}</td>
            <td>{{$paciente->correopaciente}}</td>
            <td>{{$paciente->telefonopaciente}}</td>
            <td>{{$paciente->acudientepaciente}}</td>
            <td>{{$paciente->estado->nombreestado}}</td>
            <th>{{$paciente->genero->nombregenero}}</th>
            <td>
                
                <a class="btn btn-outline-warning" href="{{url('/pacientes/'.$paciente->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/pacientes/'.$paciente->id) }}" method="post">
                @csrf
                @method('DELETE') 
                <input class="btn btn-outline-warning" type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                
                <a class="btn btn-outline-warning" href="{{url('/pacientes/'.$paciente->id)}}">
                Detalles
                </a>


              



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
