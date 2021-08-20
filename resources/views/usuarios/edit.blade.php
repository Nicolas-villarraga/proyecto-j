
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/usuarios/'.$usuario->id)}}" method="post">
@csrf

@method('PATCH')

@include('usuarios.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

