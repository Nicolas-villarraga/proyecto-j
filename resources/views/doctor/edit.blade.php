formulario de edicion

@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/doctors/'.$doctor->id)}}" method="post">
@csrf

@method('PATCH')

@include('doctors.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection
