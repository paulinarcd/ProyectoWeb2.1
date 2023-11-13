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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


