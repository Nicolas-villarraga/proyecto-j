
<h2>formulario de edicion Proveedor
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/proveedores/'.$proveedor->id )}}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('proveedores.form',['modo'=>'Editar']);

</form>
</div>    
@endsection
