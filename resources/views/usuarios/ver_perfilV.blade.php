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


    {{-- <header class="p-3 text-bg-dark">
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
              <a class="link" href="home">Iniciar Sesion</a>
            </button>
            <button type="button" class="btn btn-outline-light me-3">
              <a  class="link" href="home">Registrarse</a>
            </button>
            <button type="button" class="btn btn-light"> 
              <img src="images/carrito-de-compras.png" alt="" height ="20px" width="20px">
            </button>
          </div>
        </div>
      </div>
    </header> --}}

    <div class="container text-aling-center">
        <img src="https://www.delacabeza-rivera.es/wp-content/uploads/2020/06/PERFIL-VACIO.png" alt="Foto de Perfil" height="100px" width="100px" class="img-fluid">
        <h1> {{auth()->user()->name}}</h1>
        <h3>Información del Usuario</h3>
        <p>Email:  {{auth()->user()->email}}</p>

    </div>


    <main class="container">
      <div class="row ">
        
          <div class="col-md-6">

          </div>

          <li>
            <button class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#vendedores-collapse" aria-expanded="false">
              Cambiar contraseña
            </button>
          </li>
          <label for="">Cambiar imagen de perfil:</label><input type="file" id="imagen" name="imagen" accept="image/*">

          <div class="col-md-6">
              

                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
                    <h3>Publicaciones</h3>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
                
                            @foreach($productos as $producto)
                                @if($producto->id_user == auth()->user()->id)
                                    <div class="col" style="width: 200px; height: 100px;">
                                        <div class="card shadow-sm">
                                            <img class="bd-placeholder-img card-img-top" width="100%" height="80px" src="{{$producto->imagen}}" alt="">
                                            <div class="card-body">
                                            <h5>{{$producto->nombre}}</h5>
                                            <p class="card-text">{{$producto->precio}}</p>
                                            <button type="button" class="btn btn-dark">
                                                <a href="" style="text-decoration: none; color: white;">Ver</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
   
                            @endif
                    @endforeach
                </div>
        </div>
    </main>


    

      {{-- <div class="container">
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
      </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection