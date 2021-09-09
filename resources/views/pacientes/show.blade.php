<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>{{$paciente->nombrepaciente}}</td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>{{$paciente->apellidopaciente}}</td>
                </tr>
                <tr>
                    <td>Tipo de Documento</td>
                    <td>{{$paciente->tipodocumento->nombredocumento}}</td>
                </tr>
                <tr>
                    <td>Documento</td>
                    <td>{{$paciente->documentopaciente}}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{$paciente->telefonopaciente}}</td>
                </tr>
                <tr>
                    <td>Acudiente</td>
                    <td>{{$paciente->acudientepaciente}}</td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>{{$paciente->correopaciente}}</td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td>{{$paciente->contraseña}}</td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td>{{$paciente->estado->nombreestado}}</td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td>{{$paciente->genero->nombregenero}}</td>
                </tr>
                <br>
            </table>
            <a class="btn btn-outline-warning" href="/pacientes/">volver</a>
        </div>
    </div>


</div>
@endsection
