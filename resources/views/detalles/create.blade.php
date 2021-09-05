
<h2>formulacion de creacion</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/detalles')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('detalles.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection