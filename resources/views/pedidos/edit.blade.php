Formulario de edición de pedido

<form action="{{ url('/pedidos/'.$pedido->id )}}" method="post">
@csrf
{{ method_field('PATCH') }}

@include('pedidos.form',['modo'=>'Editar']);

</form>