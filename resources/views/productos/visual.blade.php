<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOPS STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="..\css\style.css"> 
</head>

  <body>


    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="images/bolsa-de-la-compra.png" alt="" height ="40px" width="40px">
            
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white  ">Inicio</a></li>
            <li><a href="/" class="nav-link px-2 text-secondary">Hombre</a></li>
            <li><a href="/" class="nav-link px-2 text-secondary">Mujer</a></li>
            <li><a href="/" class="nav-link px-2 text-secondary">Tiendas</a></li>
          </ul>

  
          <div class="btn btn-light">
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">
                <img src="images/carrito-de-compras.png" alt="" height ="20px" width="20px">
              </ul>
            {{-- <div> --}}
              {{-- <button type="button" class="btn btn-light"> 
              <img src="images/carrito-de-compras.png" alt="" height ="20px" width="20px">
              </button> --}}
            </div>
            <div class="text-end">
            <ul class="navbar-nav me-auto">
              @guest
                @if (Route::has('login'))
                  <li class="btn btn-outline-dark me-3">
                    <a class="btn btn-outline-light me-2" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                  </li>
                @endif
        
                @if (Route::has('register'))
                  <li class="btn btn-outline-dark me-3">
                    <a class="btn btn-outline-light me-2" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                  </li>
                @endif
              @else
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg> --}}
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                {{-- </button> --}}
              @endguest
            </ul>

          {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <button type="button" class="btn btn-light"> 
              <img src="images/carrito-de-compras.png" alt="" height ="20px" width="20px">
            </button>
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="btn btn-outline-dark me-3">
                              <a class="btn btn-outline-light me-2" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="btn btn-outline-dark me-3">
                              <a class="btn btn-outline-light me-2" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                          </li>
                      @endif
                  @else
                      <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                      </button>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Cerrar sesion') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div> --}}

        
          </div>
        </div>
      </div>
    </header>


    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1452&q=80" alt="">
          <div class="container">
            <div class="carousel-caption  text-start">
              <h1>Se un aliado</h1>
              <p class="opacity-75">Vende tu marcade ropa aquí</p>
              <p><a class="btn btn-lg btn-dark" href="registro.html">Registrate</a></p>
            </div>
          </div>
        </div>
        
        <div class="carousel-item">
          <img class="bd-placeholder-img " width="100%" height="100%" src="https://images.unsplash.com/photo-1503341733017-1901578f9f1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
          <div class="container">
            <div class="carousel-caption  text-start">
              <h1>Personaliza tu camiseta.</h1>

              <p class="opacity-75">Elige color y estilos que desees.</p>
              <p><a class="btn btn-lg btn-dark" href="{{route ('personalizar.index')}}">Personaliza</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
            <div class="carousel-caption text-start">
              <h1>Descubre tu estilo</h1>
              <p class="opacity-75">Encontrarás diferentes productos de diferentes tiendas</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <a  class="link" href="visual.html">
          <div class="col">
            <div class="card shadow-sm text-bg-dark">
              <img class="bd-placeholder-img card-img-top" width="100%" height="" src="https://images.unsplash.com/photo-1499971442178-8c10fdf5f6ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1382&q=80" alt="">
              <div class="card-body dark">
                <h5>Camisetas</h5>
              </div>
            </div>
          </div>
        </a>

        <a  class="link" href="visual.html">
          <div class="col">
            <div class="card shadow-sm text-bg-dark">
              <img class="bd-placeholder-img card-img-top" width="100%" height="" src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
              <div class="card-body">
                <h5>Hoddies</h5>
              </div>
            </div>
          </div>
        </a>

        <a  class="link" href="visual.html">
          <div class="col">
            <div class="card shadow-sm text-bg-dark">
              <img class="bd-placeholder-img card-img-top" width="100%" height="" src="https://plus.unsplash.com/premium_photo-1674828601362-afb73c907ebe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1506&q=80" alt="">
              <div class="card-body">
                <h5>Pantalones</h5>
              </div>
            </div>
          </div>
        </a>


        </div>
      </div>
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