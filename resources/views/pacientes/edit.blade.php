
<h2>formulario de edicion
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/pacientes/'.$paciente->id)}}" method="post">
@csrf

@method('PATCH')

@include('pacientes.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

