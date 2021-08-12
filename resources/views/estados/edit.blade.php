
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/estados/'.$estado->id)}}" method="post">
@csrf

@method('PATCH')

@include('estados.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

