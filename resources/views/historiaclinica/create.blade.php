Formulario creacion

@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/historiaclinicas')}}" method="post" enctype="multipart/form-data">
@csrf

@include('historiaclinicas.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection 