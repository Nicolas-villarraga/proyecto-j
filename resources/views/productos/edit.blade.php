Formulario de edición de producto

<form action="{{ url('/productos/'.$producto->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('productos.form',['modo'=>'Editar']);

</form>

