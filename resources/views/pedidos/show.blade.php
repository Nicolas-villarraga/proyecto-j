<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>{{$pedido->fecha}}</td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>{{$pedido->hora}}</td>
                </tr>
                <tr>
                    <td>Tipo de Documento</td>
                    <td>{{$pedido->totalpedido}}</td>
                </tr>
                <tr>
                    <td>Documento</td>
                    <td>{{$pedido->observacionespedido}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/detallepedidos/">detalle</a>
            <a class="btn btn-outline-warning" href="/pedidos/">volver</a>
        </div>
    </div>


</div>
@endsection
