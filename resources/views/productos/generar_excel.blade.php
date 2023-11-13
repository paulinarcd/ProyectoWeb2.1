

<div class="col-8">
    <div class="mb-3">
    <table class="table table-sm">
        <h3>Lista Productos</h3>
        <thead class="thead-dark">
        <br>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Genero</th>        
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->genero}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>



