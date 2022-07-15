@extends('layout/plantilla')

@section('tituloPagina','CRUD')

@section('Contenido')


<div class="container">
<div class="card">
  <h5 class="card-header">Bienvenido EKS</h5>
  <div class="card-body">
    <h5 class="card-title">Listado de Productos</h5>
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <td>#</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Costo</td>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->Nombre}}</td>
                        <td>{{$producto->Descripcion}}</td>
                        <td>{{$producto->Costo}}</td>
                            <td>
                        <a href="{{url('/productos/'.$producto->id.'/edit')}}">
                            Editar
                        </a> | 
                        <form action="{{url('/productos/'.$producto->id)}}" method="post">
                                @csrf
                               {{method_field('DELETE')}} 
                            <input type="submit" onclick="return confirm('¿Estas segur@?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </p>
    <a href="{{url('/productos/create')}}" class="btn btn-primary">Agregar</a>
  </div>
</div>



@endsection