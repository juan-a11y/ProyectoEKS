<div class="container">
<div class="card">
  <h5 class="card-header">Bienvenido EKS</h5>
  <div class="card-body">
    <h5 class="card-title">Inserta un producto</h5>
    <p class="card-text">
        <form action="{{ url('/productos/'.$producto->id )}}" method="post">
@csrf
{{ method_field("PATCH") }}
@include('productos.form');


</form>

</p>
</div>
</div>
</div>