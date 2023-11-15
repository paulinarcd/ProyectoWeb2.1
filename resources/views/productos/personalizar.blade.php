<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOPS STORE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>


<style>
    #image-container {
      position: relative;
      width: 500px;
      height: 500px;
      background-size: cover;
      background-position: center;
      object-fit: cover;
    }

    #selected-image {
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      z-index: 1; /* Asegura que la imagen seleccionada esté encima de la imagen de fondo */
    }


</style>
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
          <div class="row row-cols-1 row-cols-sm-2  g-2">

            <div class="col">
              <div class="card shadow-sm" style="width: 500px; height: 500px;">
                <div class="card-body"  id="image-container">
                
                    <img class="bd-placeholder-img card-img-top" id="imagenPrincipal" width="100%" height="100%" src="https://static.vecteezy.com/system/resources/previews/021/103/506/non_2x/black-t-shirt-mockup-free-png.png" alt="Imagen">
                    <img  class="bd-placeholder-img card-img-top" id="selected-image" src="" alt="Imagen">
                
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
                    <input type="file" id="fileInput" accept=".png, .jpg, .jpeg">


                      <ul class="list-unstyled ps-0">

                      <li class="mb-1  border-top my-3">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                          Colores
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="lista_colores">
                            <button class="btnColor" style="background-color: black;" data-imagen="https://static.vecteezy.com/system/resources/previews/021/103/506/non_2x/black-t-shirt-mockup-free-png.png">Aqui</button>
                              <button class="btnColor" style="background-color: blue;" data-imagen="https://diezstudio.com.co/cdn/shop/files/Diez.png?v=1685398665">Aqui</button>
                              <button class="btnColor" style="background-color: rgb(255, 255, 255);" data-imagen="https://static.vecteezy.com/system/resources/thumbnails/010/883/931/small/white-kids-t-shirt-mockups-short-sleeve-free-png.png">Aqui</button>
                              <button class="btnColor" style="background-color: red;" data-imagen="https://static.vecteezy.com/system/resources/previews/021/103/351/non_2x/red-isolated-t-shirt-free-png.png">Aqui</button>
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
                            @foreach($tallas as $talla)
                              <input type="checkbox" id="talla">
                              <label for="talla" value="{{$talla->id}}">{{$talla->nombre}}</label> <br>
                              @endforeach
                            </li>

                           
                          
                          </ul>
                        </div>
                        
                      </li>

                    </ul>
                      
                  </div>
                </div>
                <br>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div id="resize-buttons">
                            <button id="increase-size" class="btn btn-dark">Aumentar tamaño</button>
                            <button id="decrease-size" class="btn btn-dark">Reducir tamaño</button>
                            <button type="submit" id="save-as-image" class="btn btn-dark">Guardar como imagen</button>
                        </div>
                    </div>
                </div>
              </div>


        </form>
              

            </div>
    <script>
           
    </script>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
    <script>

const fileInput = document.getElementById('fileInput');
const selectedImage = document.getElementById('selected-image');
const increaseSizeButton = document.getElementById('increase-size');
const decreaseSizeButton = document.getElementById('decrease-size');
const imageContainer = document.getElementById('image-container');
const imagenPrincipal = document.getElementById('imagenPrincipal');
let isDraggingImage = false;
let offsetX, offsetY;
const saveAsImageButton = document.getElementById('save-as-image');



fileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file && (file.type === 'image/png' || file.type === 'image/jpeg' || file.type === 'image/jpg')) {
        const imageUrl = URL.createObjectURL(file);
        selectedImage.src = imageUrl;
        selectedImage.style.width = '100%';
        selectedImage.style.height = '100%';
        fitImageWithinContainer(selectedImage);
    }
});

increaseSizeButton.addEventListener('click', () => {
    resizeImage(selectedImage, 1.1);
    fitImageWithinContainer(selectedImage);
});

decreaseSizeButton.addEventListener('click', () => {
    resizeImage(selectedImage, 0.9);
    fitImageWithinContainer(selectedImage);
});

selectedImage.addEventListener('mousedown', (e) => {
    isDraggingImage = true;
    offsetX = e.clientX - selectedImage.getBoundingClientRect().left;
    offsetY = e.clientY - selectedImage.getBoundingClientRect().top;
    selectedImage.style.cursor = 'grabbing';
});

document.addEventListener('mousemove', (e) => {
    if (isDraggingImage) {
        const x = e.clientX - offsetX;
        const y = e.clientY - offsetY;
        const containerRect = imageContainer.getBoundingClientRect();
        const maxLeft = 0;
        const maxTop = 0;
        const maxRight = containerRect.width - selectedImage.offsetWidth;
        const maxBottom = containerRect.height - selectedImage.offsetHeight;

        selectedImage.style.left = Math.max(maxLeft, Math.min(maxRight, x)) + 'px';
        selectedImage.style.top = Math.max(maxTop, Math.min(maxBottom, y)) + 'px';
    }
});

document.addEventListener('mouseup', () => {
    isDraggingImage = false;
    selectedImage.style.cursor = 'grab';
});

function resizeImage(image, factor) {
    const currentWidth = image.clientWidth;
    const currentHeight = image.clientHeight;
    image.style.width = (currentWidth * factor) + 'px';
    image.style.height = (currentHeight * factor) + 'px';
}

function fitImageWithinContainer(image) {
    const containerWidth = imageContainer.clientWidth;
    const containerHeight = imageContainer.clientHeight;
    const imageWidth = image.clientWidth;
    const imageHeight = image.clientHeight;

    if (imageWidth > containerWidth || imageHeight > containerHeight) {
        const widthRatio = containerWidth / imageWidth;
        const heightRatio = containerHeight / imageHeight;
        const minRatio = Math.min(widthRatio, heightRatio);
        image.style.width = (imageWidth * minRatio) + 'px';
        image.style.height = (imageHeight * minRatio) + 'px';
    }
}



saveAsImageButton.addEventListener('click', () => {
    html2canvas(imageContainer, {
        useCORS: true,
        logging: true, // Para ver posibles errores en la consola
    }).then((canvas) => {
        const image = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.href = image;
        link.download = 'contenedor_completo.png';
        link.click();
    });
});


  // Función para cambiar el color de la imagen principal
  function cambiarColor(event) {
    var imagenPrincipal = document.getElementById('imagenPrincipal');
    // Obtener la URL de la imagen asociada al botón
    var nuevaImagen = event.target.getAttribute('data-imagen');
    if (nuevaImagen) {
      imagenPrincipal.src = nuevaImagen;
    }
  }

  // Eventos para los botones
  document.getElementById('lista_colores').addEventListener('click', function (event) {
    if (event.target.classList.contains('btnColor')) {
      cambiarColor(event);
    }
  });




    </script>

  </body>
</html>