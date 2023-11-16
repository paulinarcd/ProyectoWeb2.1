function mostrarGrafica(){
    const api = "https://fakestoreapi.com/products/";
    var categoria = []
    var id = []
    fetch(api)
        .then(Response => Response.json())
        .then(datos=>{
            datos.forEach(function(element) {
                if(element.category!='' && element.id!=''){
                    categoria.push(element.category);
                    id.push(element.id);
                }
                var trace1 = {
                    type: 'bar',
                    x: categoria,
                    y: id,
                    marker: {
                        color: '#C8A2C8',
                        line: {
                            width: 2.5
                        }
                    }
                  };
                  
                  var data = [ trace1 ];
                  
                  var layout = { 
                    title: 'Cantidad de productos por categoria',
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