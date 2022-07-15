@extends('layout/plantilla')

@section('tituloPagina','CRUD')

@section('Contenido')
<div class="container">
<div class="card">
  <h5 class="card-header">Bienvenido EKS</h5>
  <div class="card-body">
    <h5 class="card-title">Registra productos</h5>
    <p class="card-text">
       
    <a href="{{url('/productos')}}" class="btn btn-primary">PRODUCTOS</a>

    
    </p>
  </div>
</div>

</div>

@endsection