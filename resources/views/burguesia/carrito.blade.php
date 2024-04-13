<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La burguesia</title>
    <!-- Aquí puedes agregar tus estilos CSS si los tienes -->
</head>

<body>
    <!-- Incluye el encabezado de la página -->
    @include('burguesia.header')

{{-- Comentario Blade: justify-content-center text-center --}}

<!-- Título de la página -->
<h1 class="text-center">Carrito de Compras</h1>

<!-- Verifica si hay productos en el carrito -->

    <div id="carrito" class="text-center"> </div>

    <!-- Tabla para mostrar los productos del carrito -->
   


<!-- Incluye el script de Bootstrap -->
<script src="{{ asset('js/boostrap.js') }}"></script>

<script>
    var carrito = document.getElementById("carrito");
    let cart = sessionStorage.getItem('cart');

    if (cart != null) {
        // Parsear el JSON almacenado en sessionStorage
        var productos = JSON.parse(cart);

        if (productos.length > 0) {
            // Construir la tabla HTML para mostrar los productos
            contruirCarrito();
        } else {
            carrito.innerHTML = '<p>No hay productos en el carrito.</p>';
        }
    } else {
        carrito.innerHTML = '<p>No hay productos en el carrito.</p>';
    }

    function contruirCarrito() {
        var carrito = document.getElementById("carrito");
        let cart = sessionStorage.getItem('cart');
        var productos = JSON.parse(cart);

        var tablaHTML = '<table>';
            tablaHTML += '<thead><tr><th>Imagen</th><th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Acciones</th></tr></thead>';
            tablaHTML += '<tbody>';

            // Iterar sobre cada producto en el carrito
            for (var i = 0; i < productos.length; i++) {
                var producto = productos[i];
                tablaHTML += '<tr>';
                    tablaHTML += '<td><img src="storage/' + producto.img +'" alt="' + producto.titulo + '" style="width: 146px; height: 77px;"></td>';
                    tablaHTML += '<td>' + producto.titulo + '</td>';
                    tablaHTML += '<td>' +'$' + producto.precio + '</td>';
                    tablaHTML += '<td> <!-- Campo de entrada para la cantidad -->';
                    tablaHTML += '<p id='+producto.id+'>'+producto.cantidad+'</p>'; // Se inicia con cantidad 1 y mínimo 1
                    tablaHTML += '</td>';
                    tablaHTML += '<td>' + '<button onclick="disminuirCantidad(' + producto.id + ')">-</button>'; // Botón para aumentar la cantidad
                    tablaHTML += '<button onclick="aumentarCantidad(' + producto.id + ')">+</button>'; // Botón para disminuir la cantidad
                       '</td>'
                    
                tablaHTML += '</tr>';
            }

            tablaHTML += '</tbody></table>';
            // Agregar la tabla al div "carrito"
            carrito.innerHTML = tablaHTML;
    }

    // Función para aumentar la cantidad del producto
    function aumentarCantidad(productoId) {
        var parrafo = document.getElementById(productoId);
        var cantidad = parseInt(parrafo.textContent);
        
        if (cantidad <= 9) {
            parrafo.innerText = cantidad + 1;

            let cart = sessionStorage.getItem('cart');
            var productos = JSON.parse(cart);

            productos.map(function (producto) {
                if(producto.id == productoId) {
                    producto.cantidad = cantidad + 1;
                }
                return producto;
            });

            var platillosJSON = JSON.stringify(productos);

            // Guardar la cadena JSON en sessionStorage
            sessionStorage.setItem('cart', platillosJSON);
        }

    }

    // Función para disminuir la cantidad del producto
    function disminuirCantidad(productoId) {
        var parrafo = document.getElementById(productoId);
        var cantidad = parseInt(parrafo.textContent);
        var carrito = document.getElementById("carrito");

        let cart = sessionStorage.getItem('cart');
        var productos = JSON.parse(cart);

        if(cantidad == 1) {
            // Filtrar la lista de productos para excluir el producto con el ID especificado
            productos = productos.filter(function(producto) {
                return producto.id != productoId;
            });
            var platillosJSON = JSON.stringify(productos);
            // Guardar la cadena JSON en sessionStorage
            if(productos.length == 0) {
                // Eliminar el elemento del sessionStorage
                sessionStorage.removeItem("cart");
                carrito.innerHTML = '<p>No hay productos en el carrito.</p>';
            } else {
                sessionStorage.setItem('cart', platillosJSON);
                contruirCarrito();
            }
           
            return;
        }
        if (cantidad > 1) {
            parrafo.innerText =  cantidad - 1;

            productos.map(function (producto) {
                if(producto.id == productoId) {
                    producto.cantidad = cantidad - 1;
                }
                return producto;
            });

            var platillosJSON = JSON.stringify(productos);
            // Guardar la cadena JSON en sessionStorage
            sessionStorage.setItem('cart', platillosJSON);
        }
    }
</script>




<!--<script>
    var carrito = document.getElementById("carrito");
    let cart = sessionStorage.getItem('cart');

  

    if(cart  != null) {
        carrito.innerHTML = ''; 
    } else {
        carrito.innerHTML = '<p>No hay productos en el carrito.</p>';     
    }

     
</script> -->


<!-- Incluye el pie de página u otros elementos finales -->
@include('burguesia.footer')

</body>
</html>
