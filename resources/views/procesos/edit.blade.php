
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/procesos/'.$proceso->id)}}" method="post">
@csrf

@method('PATCH')

@include('procesos.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

