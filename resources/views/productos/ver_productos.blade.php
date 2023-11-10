<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    </header>

      


    

    


    <div class="card">
      <div class="card-body">
        <div class="container text-center">
      
          <div class="row">
            <div class="col-8">
              <img src="img/camisetas.jpg" alt="" height ="400px" width="300px">

              <div class="card" style="margin-top: 10%;">
                <div class="card-header">
                  Descripcion
                </div>
                <div class="card-body">
                  <label for="">Descripcion del producto</label>
                </div>
              </div>
            </div>


            <div class="col-4">
    
              <div class="card">
                <div class="card-body">
                  <label for="">Nombre de la Tienda</label>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-body">
                  <label for="">Nombre Producto</label>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-header">
                  Precio
                </div>
                <div class="card-body">
                  <label for="">$53.000</label>
                </div>
              </div>
              <br>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#talla-collapse" aria-expanded="false">
                  Talla
                </button>
                <div class="collapse" id="talla-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                      <select name="" id="">
                        <option value="">
                          <label for="box9">XS</label>
                        </option>
                        <option value="">
                          <label for="box10">S</label>
                        </option>
                        <option value="">
                          <label for="box11">M</label>
                        </option>
                        <option value="">
                          <label for="box12">L</label>
                        </option>
                        <option value="">
                          <label for="box13">XL</label>
                        </option>
                      </select>
                      
                      
                    </li>
                    
                  </ul>
                </div>
                
              </li>
    
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#color-collapse" aria-expanded="false">
                  Color
                </button>
                <div class="collapse" id="color-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="lista_colores">
                    <button class="btn" style="background-color: cadetblue;" ></button>
                    <button class="btn" style="background-color:tan;" ></button>
                    <button class="btn" style="background-color:beige " ></button>
                    <button class="btn" style="background-color:brown" ></button>
                    <button class="btn" style="background-color:blueviolet" ></button>
                    <button class="btn" style="background-color:chocolate" ></button>
                    <br>
                    <button class="btn" style="background-color:black" ></button>
                    <button class="btn" style="background-color:crimson;" ></button>
                    <button class="btn" style="background-color:darkgoldenrod" ></button>
                    <button class="btn" style="background-color:darkgreen" ></button>
                    <button class="btn" style="background-color:darkgrey;" ></button>
                    <button class="btn" style="background-color:darkred" ></button>
                    <br>
                    <button class="btn" style="background-color:hotpink" ></button>
                    <button class="btn" style="background-color:darkorchid;" ></button>
                    <button class="btn" style="background-color:khaki" ></button>
                    <button class="btn" style="background-color:blue" ></button>
                    <button class="btn" style="background-color:red" ></button>
                    <button class="btn" style="background-color:darkslategray;" ></button>
                  
                  </ul>
                </div>
              </li>
              
              <button class="btn btn-dark">Agregar al carrito</button>
            </div>
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
  <!-- <script src="verproductos.css"></script> -->
  </body>
</html>