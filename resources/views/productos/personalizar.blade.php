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
            <img src="img/bolsa-de-la-compra.png" alt="" height ="40px" width="40px">
            
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.html" class="nav-link px-2 text-secondary">Inicio</a></li>
            <li><a href="visual.html" class="nav-link px-2 text-white">Hombre</a></li>
            <li><a href="visual.html" class="nav-link px-2 text-white">Mujer</a></li>
            <li><a href="visual.html" class="nav-link px-2 text-white">Tiendas</a></li>
          </ul>

  
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">
              <a class="link" href="InicioSesion.html">Iniciar Sesion</a>
            </button>
            <button type="button" class="btn btn-outline-light me-3">
              <a  class="link" href="registro.html">Registrarse</a>
            </button>
            <button type="button" class="btn btn-light"> 
              <img src="img/carrito-de-compras.png" alt="" height ="20px" width="20px">
            </button>
          </div>
        </div>
      </div>
    </header>



      

      <div class="album py-5 bg-body-tertiary">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

           

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="" src="https://oaxis-cloud.s3.us-east-2.amazonaws.com/images/2022/07/14/lS6FbGUr4eEyrvkpbmTW.jpg" alt="">
                <div class="card-body">
                </div>
              </div>
            </div>


            <div class="col">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5>Pon tú estilo</h5>
                    <label for="archivo" class="input-file-label">
                        Seleccionar Archivo
                    </label>
                      <input type="file" name="archivo" id="archivo" class="input-file">
                      
                      
                    <h5 style="margin-top: 70px">Estilos</h5>
                    <p class="card-text">Nuestros diseños</p>
                    <button type="button" class="btn btn-dark">Mostrar</button>

                  </div>
                </div>
              </div>



            <div class="d-flex flex-nowrap"> 
                <div class="flex-shrink-0 p-3" style="width: 250px;">
                    <ul class="list-unstyled ps-0">
          
                      <li class="mb-1  border-top my-3">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                          Colores
                        </button>
                        <div class="collapse" id="orders-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="lista_colores">
                            <button class="btnColor" style="background-color: cadetblue;" ></button>
                            <button class="btnColor" style="background-color:tan;" ></button>
                            <button class="btnColor" style="background-color:beige " ></button>
                            <button class="btnColor" style="background-color:brown" ></button>
                            <button class="btnColor" style="background-color:blueviolet" ></button>
                            <button class="btnColor" style="background-color:chocolate" ></button>
                            <button class="btnColor" style="background-color:black" ></button>
                            <button class="btnColor" style="background-color:crimson;" ></button>
                            <button class="btnColor" style="background-color:darkgoldenrod" ></button>
                            <button class="btnColor" style="background-color:darkgreen" ></button>
                            <button class="btnColor" style="background-color:darkgrey;" ></button>
                            <button class="btnColor" style="background-color:darkred" ></button>
                            <button class="btnColor" style="background-color:hotpink" ></button>
                            <button class="btnColor" style="background-color:darkorchid;" ></button>
                            <button class="btnColor" style="background-color:khaki" ></button>
                            <button class="btnColor" style="background-color:blue" ></button>
                            <button class="btnColor" style="background-color:red" ></button>
                            <button class="btnColor" style="background-color:darkslategray;" ></button>
                          
                          </ul>
                        </div>
                      </li>
                      
                      <li class="border-top my-3"></li>
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                          Talla
                        </button>
                        <div class="collapse" id="account-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li>
                              <input type="checkbox" id="box9">
                              <label for="box9">XS</label>
                            </li>
                            <li>
                              <input type="checkbox" id="box10">
                              <label for="box210">S</label>
                            </li>
                            <li>
                              <input type="checkbox" id="box11">
                              <label for="box11">M</label>
                            </li>
                            <li>
                              <input type="checkbox" id="box12">
                              <label for="box12">L</label>
                            </li>
                            <li>
                              <input type="checkbox" id="box13">
                              <label for="box13">XL</label>
                            </li>
                          </ul>
                        </div>
                        
                      </li>
          
                      <li class="border-top my-3"></li>
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#precio-collapse" aria-expanded="false">
                          Precio
                        </button>
                        <div class="collapse" id="precio-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <label for="customRange1" class="form-label"></label>
                            <input type="range" class="form-range" id="customRange1">
                          </ul>
                        </div>
                        
                      </li>
                    </ul>
                
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

  </body>
</html>