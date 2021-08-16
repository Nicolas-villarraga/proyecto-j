
<h2>formulacion de creacion Pedidos</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/pedidos')  }}" method="post" >
@csrf
@include('pedidos.form', ['modo'=>'Crear'] );    
</form>
</div>    
@endsection