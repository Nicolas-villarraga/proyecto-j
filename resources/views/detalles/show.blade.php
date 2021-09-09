<h2>Detalle de venta</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td>{{$detalles->producto->nombreproducto}}</td>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td>{{$detalles->descripcionproducto}}</td>
                </tr>
                <tr>
                    <td>Cantidad:</td>
                    <td>{{$detalles->cantidadproducto}}</td>
                </tr>
                <tr>
                    <td>Valor:</td>
                    <td>{{$detalles->valorproducto}}</td>
                </tr>
                <tr>
                    <td>Pedido:</td>
                    <td>{{$detalles->pedido->id}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/detalles/">volver</a>
        </div>
    </div>


</div>
@endsection
