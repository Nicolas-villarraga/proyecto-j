
<h2>Historia clinicas
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/historiaclinicas/'.$historiaclinica->id)}}" method="post">
@csrf

@method('PATCH')

@include('historiaclinicas.form',['modo'=>'Modificar']);
</form>
</div>    
@endsection

