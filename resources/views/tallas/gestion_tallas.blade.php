<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOPS STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylePersonalizar.css">
  </head>
  
  <body>


    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="images/bolsa-de-la-compra.png" alt="" height ="40px" width="40px">
            
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-secondary">Inicio</a></li>
            <li><a href="/" class="nav-link px-2 text-white">Hombre</a></li>
            <li><a href="/" class="nav-link px-2 text-white">Mujer</a></li>
            <li><a href="/" class="nav-link px-2 text-white">Tiendas</a></li>
          </ul>

  
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">
              <a class="link" href="InicioSesion.html">Iniciar Sesion</a>
            </button>
            <button type="button" class="btn btn-outline-light me-3">
              <a  class="link" href="registro.html">Registrarse</a>
            </button>
            <button type="button" class="btn btn-light"> 
              <img src="images/carrito-de-compras.png" alt="" height ="20px" width="20px">
            </button>
          </div>
        </div>
      </div>
    </header>



    <div class="container text-center">
      <div class="row">
        <div class="col-4">
            <div class="mb-3">
              <h3>Crear Tallas</h3>
                <form action="{{route('tallas.index')}}" method="post">
                  @csrf
                  <label for="nombre">Ingrese talla</label>
                  <input type="text" name="nombreTalla" id="nombre" class="form-control mb-3" required>
                  
                  @error('nombreTalla')
                        <br>
                        <span>*{{$message}}</span>
                        <br>
                  @enderror
                                                      
                  <button type="submit" class="btn btn-dark">Guardar</button>
                </form>
            </div>
                
                <script>
                    var nombre= document.getElementById('nombre').value;
                </script>
        </div>


            <div class="col-8">
                <div class="mb-3">
                <table class="table table-sm">
                  <h3>Tabla Tallas</h3>
                  <thead class="thead-dark">
                    <tr>
                      <th>Nombre</th>
        
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tallas as $talla)
                      <tr>
                        <td>{{$talla->nombre}}</td>
                        <td>
                          <th>
                            <a href="{{route ('tallas.edit', $talla->id)}}" class="btn btn-dark" id="liveAlertBtn">Editar</a>
                          </th>
                          <th>
                          <form action="{{route('tallas.destroy', $talla->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button type='submit' class="btn btn-dark">Eliminar</button>
                            </form>
                          </th>
                              

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
               
          </div>

      </div>

    


      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            </a>
            <p class="text-body-secondary">&copy; 2023</p>
          </div>
      
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <h5>Secciones</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inicio</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Hombre</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Mujer</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Tiendas</a></li>
  
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Contacto</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">WhatsApp 3206642211</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram @ropatt</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">ropatt@gmail.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Escribenos</a></li>
            </ul>
          </div>
        </footer>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

