Formulario de edición de proveedor

<form action="{{ url('/proveedores/'.$proveedor->id )}}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('proveedores.form',['modo'=>'Editar']);

</form>
