
<h2>formulacion de creacion</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/citas')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('citas.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection