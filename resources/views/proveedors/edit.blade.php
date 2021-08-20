
<h2>Proveedores
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/proveedors/'.$proveedor->id)}}" method="post">
@csrf

@method('PATCH')

@include('proveedors.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

