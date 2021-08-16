<h2>formulario de edicion Producto
</h2>
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/productos/'.$producto->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('productos.form',['modo'=>'Editar']);

</form>
</div>    
@endsection

