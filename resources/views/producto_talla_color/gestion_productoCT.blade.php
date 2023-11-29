@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOPS STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="">
  </head>
  
  
  <body>


    

    <div class="container text-center">
      <div class="row">
        <div class="col-4">
            <div class="mb-3">
              <h3>Talla y Color de Productos</h3>
                <form action="{{route('productosCT.index')}}" method="post">
                    @csrf

                    <label for="producto">Elija el producto:</label>
                    <select name="producto" id="producto" class="form-control mb-3" required>
                        @foreach($productos as $producto)
                            <option value="{{$producto->id}}"  class="form-control mb-3">{{$producto->nombre}}</option>
                        @endforeach

                    </select>


                    <label for="talla">Elija la talla del producto:</label>
                    <select name="talla" id="talla" class="form-control mb-3" required>
                        @foreach($tallas as $talla)
                            <option value="{{$talla->id}}"  class="form-control mb-3">{{$talla->nombre}}</option>
                        @endforeach
                    </select>

                    
                    <label for="color">Elija el color del producto:</label>
                    <select name="color" id="color" class="form-control mb-3" required>
                        @foreach($colors as $color)
                            <option value="{{$color->id}}"  class="form-control mb-3" style="background-color:  {{$color->nombre}};">{{$color->nombre}}</option>
                        @endforeach
                    </select>

                  @error('nombreProducto')
                        <br>
                        <span>*{{$message}}</span>
                        <br>
                  @enderror

                  <button type="submit" class="btn btn-dark">Guardar</button>
                </form>
            </div>
                
                <script>
                    var nombre= document.getElementById('producto').value;
                    var talla= document.getElementById('talla').value;
                    var color= document.getElementById('color').value;
                </script>
        </div>


            <div class="col-8">
                <div class="mb-3">
                <table class="table table-sm">
                  <h3>Tabla Productos</h3>
                  <thead class="thead-dark">
                    <tr>
                      <th>Producto</th>
                      <th>Talla</th>
                      <th>Color</th>
        
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($prodtc as $prod)
                      <tr>
                        <td>{{$prod->nombre}}</td>
                        <td>{{$talla->nombre}}</td>
                        <td><button class="btnColor" style="background-color: {{$color->nombre}};  width: 25px; height: 25px; border: none;" ></button></td>

                        <td>
                          <th>
                            <a href="{{route ('productos.edit', $prod->id)}}" class="btn btn-dark" >Editar</a>
                          </th>
                          <th>
                          <form action="{{route('productosCT.destroy', $prod->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button type='submit' class="btn btn-dark">Eliminar</button>
                          </th>
                              

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
               
          </div>

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection

