<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Fecha :</td>
                    <td>{{$proceso->fechaproceso}}</td>
                </tr>
                <tr>
                    <td>Observaciones :</td>
                    <td>{{$proceso->observacionesdeproceso}}</td>
                </tr>
                <tr>
                    <td>Doctor :</td>
                    <td>{{$proceso->doctor->nombredoctor}}</td>
                </tr>
                <tr>
                    <td>Historia :</td>
                    <td>{{$proceso->historia->id}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/pedidos/">volver</a>
        </div>
    </div>


</div>
@endsection
