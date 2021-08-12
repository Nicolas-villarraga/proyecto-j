
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/acudientes/'.$acudiente->id)}}" method="post">
@csrf

@method('PATCH')

@include('acudientes.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

