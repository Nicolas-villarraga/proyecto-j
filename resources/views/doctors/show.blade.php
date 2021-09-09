<h2>Listado de Doctores</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td>{{$doctor->nombredoctor}}</td>
                </tr>
                <tr>
                    <td>Hora</td>
                    <td>{{$doctor->apellidodoctor}}</td>
                </tr>
                <tr>
                    <td>Especialidad</td>
                    <td>{{$doctor->Especialidad->nombreespecialidad}}</td>
                </tr>
                <tr>
                    <td>Documento:</td>
                    <td>{{$doctor->documentodoctor}}</td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>{{$doctor->correodoctor}}</td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td>{{$doctor->contraseña}}</td>
                </tr>
                
                <tr>
                    <td>Genero:</td>
                    <td>{{$doctor->genero->nombregenero}}</td>
                </tr>
                
                <tr>
                    <td>Rol:</td>
                    <td>{{$doctor->Rol->nombrerol}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/doctors/">volver</a>
        </div>
    </div>


</div>
@endsection
