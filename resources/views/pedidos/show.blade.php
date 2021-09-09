<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Fecha</td>
                    <td>{{$pedido->fechapedido}}</td>
                </tr>
                <tr>
                    <td>Hora</td>
                    <td>{{$pedido->horapedido}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{$pedido->totalpedido}}</td>
                </tr>
                <tr>
                    <td>Observaciones :</td>
                    <td>{{$pedido->observacionespedido}}</td>
                </tr>
                <tr>
                    <td>Paciente :</td>
                    <td>{{$pedido->paciente->nombrepaciente}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/pedidos/">volver</a>
        </div>
    </div>


</div>
@endsection
