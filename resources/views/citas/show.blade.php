<h2>Detalle de Cita</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Fecha</td>
                    <td>{{$cita->fecha}}</td>
                </tr>
                <tr>
                    <td>Hora</td>
                    <td>{{$cita->hora}}</td>
                </tr>
                <tr>
                    <td>Especialidad</td>
                    <td>{{$cita->Especialidad->nombreespecialidad}}</td>
                </tr>
                <tr>
                    <td>Doctor</td>
                    <td>{{$cita->doctor->nombredoctor}}</td>
                </tr>
                <tr>
                    <td>Paciente</td>
                    <td>{{$cita->paciente->nombrepaciente}}</td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td>{{$cita->estado->nombreestado}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/citas/">volver</a>
        </div>
    </div>


</div>
@endsection
