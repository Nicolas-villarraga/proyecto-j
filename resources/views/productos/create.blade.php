Formulario de creación de producto

<form action="{{ url('/productos')  }}" method="post" enctype="multipart/form-data" >
@csrf
@include('productos.form', ['modo'=>'Crear'] );    



</form>