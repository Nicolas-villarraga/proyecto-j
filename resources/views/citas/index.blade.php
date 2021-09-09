@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

<div class="container">
      <div class="alert alert-success alert-dismissible" role="alert">
            @if(Session::has('mensaje'))
            {{Session::get('mensaje')}}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> 

<a class="btn btn-outline-warning" href="{{url('citas/create')}}">Nueva cita</a>

<table id="cita" class="table table-striped table-bordered" style="width:100%">
    
    
    <thead class=" bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>fecha</th>
            <th>Hora</th>
            <th>Especialidad</th>
            <th>Paciente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td>
            <td>{{$cita->Especialidad->nombreespecialidad}}</td>
            <td>{{$cita->Paciente->nombrepaciente}}</td>
            
            <td>
                
                <a class="btn btn-outline-warning "  href="{{url('/citas/'.$cita->id.'/edit')}}">
                    editar
                </a>
                <form action="{{ url('/citas/'.$cita->id ) }}" method="post">
                @csrf
                @method('DELETE')
                <input  class="btn btn-outline-warning fl-1" type="submit" onclick="return confirm('¿Deseas eleminar permanentemente?')" 
                value="borrar">
                </form>
                <a class="btn btn-outline-warning" href="{{url('/citas/'.$cita->id)}}">Detalles</a>
            </td>
        </tr>
        
        @endforeach 
         
    </tbody>
    
</table>
 @section('js')
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
     <script>
         $(document).ready(function() {
         $('#cita').DataTable();
         } );
     </script>
 @endsection

<a class="btn btn-outline-warning" href="{{url('/detalles/')}}">Detalle de Pedidos</a>
</div>

@endsection

