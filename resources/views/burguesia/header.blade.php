<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La burguesía</title>
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/proyecto.css') }}">
    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <!-- Logo y título -->
            <a class="navbar-brand dropdown-center d-flex" href="#">
                <img src="{{ asset('img/logo2-removebg-preview.png') }}" alt="BP La Burguesía del Pueblo" width="70" height="70" class="">
                <i class="justify-content-center text-center" style="line-height: 1.1;">
                    <span style="white-space: nowrap; font-size: 0.8em;">—— La ——</span><br>
                    <span style="white-space: nowrap; font-size: 1.3em;"><b>Burguesía</b></span><br>
                    <span style="white-space: nowrap; font-size: 0.8em;">del Pueblo</span>
                </i>
            </a>
            <!-- Botón para colapsar el menú en pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Elementos de navegación -->
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}" style="font-size: 18px;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/misionvision') }}" style="font-size: 18px;">Visión y Misión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/menu') }}" style="font-size: 18px;">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a id="horarios-link" class="nav-link text-white header-heading header" aria-current="page" style="font-size: 18px;" data-toggle="modal" data-target="#ventanaFlotanteHorario">Horarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/#comentarios') }}" style="font-size: 18px;">Comentarios</a>
                    </li>
                </ul>
                <!-- Botón para abrir el carrito -->
                <form action="{{ route('carrito') }}" method="GET">
                    <button type="submit" style="background:none; border:none; position: relative;">
                        <img src="{{ asset('img/anadir-al-carrito.png') }}" width="40" alt="" class="bg-none">
                        <!-- Contador del carrito -->
                        <span id="contadorCarrito"
                            style="Display:none; position: absolute; top: -5px; right: -0px; background-color: red; color: white; border-radius: 50%; padding: 3px 8px; font-size: 12px;"></span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->

    <!-- Scripts de Bootstrap y otros recursos -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Script para actualizar el contador del carrito -->
    <script>
        // Función para actualizar el contador del carrito
        function actualizarContadorCarrito() {
            // Obtener el contador del carrito
            var contadorCarrito = document.getElementById('contadorCarrito');

            // Obtener el carrito de la sesión
            var carrito = JSON.parse(sessionStorage.getItem('cart'));

            // Verificar si el carrito está vacío
            if (carrito && carrito.length > 0) {
                // Calcular el total de productos en el carrito
                var totalProductos = carrito.reduce(function (total, producto) {
                    return total + producto.cantidad;
                }, 0);

                // Mostrar el contador del carrito y actualizar el valor
                contadorCarrito.style.display = 'inline-block';
                contadorCarrito.textContent = totalProductos;
            } else {
                // Ocultar el contador del carrito si está vacío
                contadorCarrito.style.display = 'none';
            }
        }

        // Llamar a la función para actualizar el contador del carrito al cargar la página
        actualizarContadorCarrito();
    </script>

    <!-- Script para la ventana flotante de Horarios -->
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            var horarioLink = document.getElementById('horarios-link');
            var modalHorario = document.getElementById("ventanaFlotanteHorario");
            var closeBtnHorario = modalHorario.querySelector(".close");

            horarioLink.addEventListener('click', function(event) {
                event.preventDefault();
                modalHorario.style.display = "block";
            });

            closeBtnHorario.addEventListener('click', function() {
                modalHorario.style.display = "none";
            });

            window.addEventListener('click', function(event) {
                if (event.target === modalHorario) {
                    modalHorario.style.display = "none";
                }
            });
        });
    </script>
                <!--ventana flotante Horarios-->
                <div id="ventanaFlotanteHorario" class="ventana">
                    <div id="modalHorario"class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Horarios:</h4>
            
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive"> <!-- Utilizamos esta clase para hacer la tabla responsiva -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Columna 1</th>
                                                    <th>Columna 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fila 1, Columna 1</td>
                                                    <td>Fila 1, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 2, Columna 1</td>
                                                    <td>Fila 2, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 3, Columna 1</td>
                                                    <td>Fila 3, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 4, Columna 1</td>
                                                    <td>Fila 4, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 5, Columna 1</td>
                                                    <td>Fila 5, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 6, Columna 1</td>
                                                    <td>Fila 6, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 7, Columna 1</td>
                                                    <td>Fila 7, Columna 2</td>
                                                </tr>
                                                <tr>
                                                    <td>Fila 8, Columna 1</td>
                                                    <td>Fila 8, Columna 2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--ventana flotante Horarios-->
</body>
</html>