@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>   
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
</div>

@endif

    <label for="nombredoctor"> Nombre Doctor </label> 
    <input type="text" name="nombredoctor" id="nombredoctor">
    <br> 

    <label for="apellidodoctor"> Apellido Doctor </label> 
    <input type="text" name="apellidodoctor" id="apellidodoctor">
    <br> 
    <br>

    <input type="submit" value="Guardar Datos">
    
    </form>