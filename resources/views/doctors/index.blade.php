<h2>lista de Doctores</h2>

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

<a href="{{url('doctors/create')}}">Nuevo Doctor</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Especialidad</th>
            <th>Tipo de Documento</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
        <tr>
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->nombredoctor}}</td>
            <td>{{$doctor->apellidodoctor}}</td>
            <td>{{$doctor->Especialidad->nombreespecialidad}}</td>
            <td>{{$doctor->Tipodocumento->nombredocumento}}</td>
            <td>{{$doctor->documentodoctor}}</td>
            <td>{{$doctor->correodoctor}}</td>
            <td>
                
                <a href="{{url('/doctors/'.$doctor->id.'/edit')}}">
                    editar
                </a>
                 | 
                <form action="{{ url('/doctors/'.$doctor->id ) }}" method="post">
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
<a class="btn btn-outline-warning" href="{{url('/citas/')}}">Citas</a>
<a class="btn btn-outline-warning" href="{{url('/productos/')}}">inventario</a>
<a class="btn btn-outline-warning" href="{{url('/historiaclinicas/')}}">Historias</a>
<a class="btn btn-outline-warning" href="{{url('/pacientes/')}}">Pacientes</a>
<a class="btn btn-outline-warning" href="{{url('/pedidos/')}}">Pedidos</a>
<a class="btn btn-outline-warning" href="{{url('/proveedors/')}}">Proveedores</a>
</div>
@endsection
