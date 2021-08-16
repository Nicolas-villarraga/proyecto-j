
<h2>formulario de ediciòn Pedido
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/pedidos/'.$pedido->id )}}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('pedidos.form',['modo'=>'Editar']);

</form>
</div>    
@endsection