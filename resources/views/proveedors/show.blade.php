<h2>Detalle  de paciente</h2>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mb-4 col-md-offset-4">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>{{$proveedor->nombreproveedor}}</td>
                </tr>
                <tr>
                    <td>Nit</td>
                    <td>{{$proveedor->nitproveedor}}</td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td>{{$proveedor->direccionproveedor}}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{$proveedor->telefonoproveedor}}</td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>{{$proveedor->correoproveedor}}</td>
                </tr>
                <tr>
                    <td>Marca</td>
                    <td>{{$proveedor->marcaproveedor}}</td>
                </tr>
            </table>
            <a class="btn btn-outline-warning" href="/proveedors/">volver</a>
        </div>
    </div>


</div>
@endsection
