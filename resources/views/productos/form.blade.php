<label for="Nombre">Nombre del Producto</label>
<input type="text" value="{{ $producto->Nombre }}" name="Nombre" id="Nombre">
<br>
<br>
<label for="Descripcion">Descripción del Producto</label>
<input type="text" name="Descripcion" value="{{ $producto->Descripcion }}" id="Descripcion">
<br>
<br>
<label for="Costo">Costo</label>
<input type="text" name="Costo" id="Costo" value="{{ $producto->Costo }}">

<br>
<br>
<input type="submit" value="Enviar">