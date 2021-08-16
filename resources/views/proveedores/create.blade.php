Formulario de creación de proveedores

<form action="{{ url('/proveedores')  }}" method="post" >
@csrf
@include('proveedores.form', ['modo'=>'Crear'] );    



</form>