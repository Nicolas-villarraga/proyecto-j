
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/generos/'.$genero->id)}}" method="post">
@csrf

@method('PATCH')

@include('generos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection
