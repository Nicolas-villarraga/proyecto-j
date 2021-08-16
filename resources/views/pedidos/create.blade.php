Formulario de creación de pedidos

<form action="{{ url('/pedidos')  }}" method="post" >
@csrf
@include('pedidos.form', ['modo'=>'Crear'] );    



</form>