<h2>Detalle de Historia</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Fecha de Creación :</td>
                    <td>{{$historiaclinica->fechadecreacionhistoria}}</td>
                </tr>
                <tr>
                    <td>Descripcion :</td>
                    <td>{{$historiaclinica->descripcionhistoria}}</td>
                </tr>
                <tr>
                    <td>Paciente :</td>
                    <td>{{$historiaclinica->paciente->nombrepaciente}}</td>
                </tr>
                <tr>
                    <td>Doctor :</td>
                    <td>{{$historiaclinica->doctor->nombredoctor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/historiaclinicas">volver</a>
        </div>
    </div>


</div>
@endsection
