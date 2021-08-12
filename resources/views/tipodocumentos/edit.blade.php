<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/tipodocumentos/'.$tipodocumento->id)}}" method="post">
@csrf

@method('PATCH')

@include('tipodocumentos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection