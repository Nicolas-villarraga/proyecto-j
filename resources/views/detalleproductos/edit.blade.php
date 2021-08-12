
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/detalleproductos/'.$detalleproducto->id)}}" method="post">
@csrf

@method('PATCH')

@include('detalleproductos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection
