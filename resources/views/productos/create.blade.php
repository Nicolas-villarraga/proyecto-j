
<h2>Productos</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('productos.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection