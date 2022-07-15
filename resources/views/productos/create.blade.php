@extends('layout/plantilla')

@section('tituloPagina','CRUD')

@section('Contenido')

<div class="container">
<div class="card">
  <h5 class="card-header">Bienvenido EKS</h5>
  <div class="card-body">
    <h5 class="card-title">Inserta un producto</h5>
    <p class="card-text">
<form action="{{ url('/productos') }}" method="post">
    @csrf

    <label for="Nombre">Producto</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<br>
<label for="Descripcion">Descripción del Producto</label>
<input type="text" name="Descripcion" id="Descripcion">
<br>
<br>
<label for="Costo">Costo</label>
<input type="text" name="Costo" id="Costo">
<br>
<br>
<input type="submit" value="Enviar">



</form>
</p>
</div>
</div>
</div>

@endsection