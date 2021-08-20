Formulario creacion

@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/doctors')}}" method="post" enctype="multipart/form-data">
@csrf

@include('doctors.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection 