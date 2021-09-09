<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre :</td>
                    <td>{{$rol->nombrerol}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/rols/">volver</a>
        </div>
    </div>


</div>
@endsection
