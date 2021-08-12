
<h2>formulacion de creacion</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/detalleproductos')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('detalleproductos.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection