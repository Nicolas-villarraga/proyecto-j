

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>{{$producto->nombreproducto}}</td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td>{{$producto->descripcionproducto}}</td>
                </tr>
                <tr>
                    <td>Precio compra</td>
                    <td>{{$producto->preciocompra}}</td>
                </tr>
                <tr>
                    <td>Precio venta</td>
                    <td>{{$producto->precioventa}}</td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td>{{$producto->cantidadproducto}}</td>
                </tr>
                <tr>
                    <td>Marca</td>
                    <td>{{$producto->proveedor->marcaproveedor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/productos/">volver</a>
        </div>
    </div>


</div>
@endsection
