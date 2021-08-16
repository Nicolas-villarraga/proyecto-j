
<h1> {{ $modo }} Pedido </h1>
<label for="fecha"> Fecha Pedido</label>
<input type="date" name="fecha" value="{{ isset($pedido->fecha)?$pedido->fecha:'' }}" id="fecha">
<br>
<label for="hora">Hora del Pedido </label>
<input type="time" name="hora" value="{{ isset($pedido->hora)?$pedido->hora:'' }}" id="hora"> 
<br>
<label for="totalpedido"> Total Pedido</label>
<input type="number" name="totalpedido" value="{{ isset($pedido->totalpedido)?$pedido->totalpedido:'' }}" id="totalpedido" >
<br>
<label for="observacionespedido"> Observaciones del Pedido </label>
<input type="text" name="observacionespedido" value="{{ isset($pedido->observacionespedido)?$pedido->observacionespedido:'' }}" id="observacionespedido">
<br>
<input type="submit" value="{{ $modo }} datos ">

<a href="{{ url('pedidos/') }}"> Regresar </a>

<br>