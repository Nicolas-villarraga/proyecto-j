
<h2>formulacion de creacion</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/proveedores')  }}" method="post" >
@csrf
@include('proveedores.form', ['modo'=>'Crear'] );    
</form>
</div>    
@endsection