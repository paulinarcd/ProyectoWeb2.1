function mostrarGrafica(){
    const api = "https://api.escuelajs.co/api/v1/products";
    var nombre = []
    var imagenes = []
    fetch(api)
        .then(Response => Response.json())
        .then(datos=>{
            datos.forEach(function(element) {
                if(element.name!='' && element.image!=''){
                    nombre.push(element.name);
                    imagenes.push(element.image);
                }
                var trace1 = {
                    type: 'bar',
                    x: nombre,
                    y: imagenes,
                    marker: {
                        color: '#C8A2C8',
                        line: {
                            width: 2.5
                        }
                    }
                  };
                  
                  var data = [ trace1 ];
                  
                  var layout = { 
                    title: 'Cantidad de productos por nombre',
                    font: {size: 18}
                  };
                  
                  var config = {responsive: true}
                  
                  Plotly.newPlot('grafico', data, layout, config );
            });
        })
}

function escondergrafico(){
    var ocultar = document.getElementById("grafico")
    ocultar.innerHTML = '';
}