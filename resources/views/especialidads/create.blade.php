
<h2>Especialidades</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/especialidads')}}" method="post" enctype="multipart/form-data">
@csrf
    
@include('especialidads.form',['modo'=>'Confirmar']);
</form>
</div>    
@endsection