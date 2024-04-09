@include('burguesia.header')

<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral izquierda para categorías -->
        <div class="col-lg-3">
            <div class="list-group">
                <!--intente hacer esto de los precios pero me llevo la chingada :(-->
                <!-- Filtros por precio -->
                <div class="list-group-item">
                    <h5 class="mb-3">Filtrar por precio:</h5>
                    <button onclick="filterByPrice('asc')" class="btn btn-secondary">Más Barato</button>
                    <button onclick="filterByPrice('desc')" class="btn btn-secondary">Más Caro</button>
                </div>
                <!--puse esto en comentario porque no se ;< nose si el menu sera estatico y ya me canse alv-->
                <!--<div id="categoryLinks" class="list-group" style="position: fixed; top:2; left: 0;">-->
                @foreach ($lista as $categoria)
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showCategory('{{ $categoria->nombre }}')"
                        style="background-color: #9CA64E;">{{ $categoria->nombre }}</a>
                @endforeach
                <!--</div>-->
                <!-- Agrega más categorías según sea necesario -->
            </div>
        </div>
        <!-- Contenido principal con cards -->
        <div class="col-lg-9">
            <!-- Título de la categoría seleccionada -->
            <br>
            <h2 class="text-center" id="categoriaSeleccionada"></h2>
            <br>
            <div id="menuContent">
                <!-- Aquí se mostrarán los platillos de la categoría seleccionada -->
            </div>
        </div>
    </div>
</div>

@include('burguesia.footer')


<script>
    // Define un objeto con los platillos por categoría
    var menuItems = {
        @foreach ($lista as $categoria)
            '{{ $categoria->nombre }}': [ //entradas
                @foreach ($platillos as $platillo)
                    @if($categoria->nombre==$platillo->categoria)
                    {
                        id: '{{$platillo->id}}',
                        titulo: '{{$platillo->nombre}}',
                        descripcion: '{{$platillo->descripcion}}',
                        imagen: '{{$platillo->imagen}}',
                        precio: '{{$platillo->precio}}'

                    },
                    @endif
                @endforeach

                //             @foreach ($platillos as $platillo)
                //     <ul>
                //         <li>{{ $platillo->nombre }}</li>
                //         {{-- php artisan storage:link --}}
                //         <img src="{{ asset('storage') . '/' . $platillo->imagen }}" alt="" width="100">
                //         <li>{{ $platillo->imagen }}</li>
                //         <li>{{ $platillo->descripcion }}</li>
                //         <li>{{ $platillo->precio }}</li>
                //         <li>{{ $platillo->categoria }}</li>
                //         <a href="{{ url('/admin/menu/editar/' . $platillo->id) }}">Editar</a>
                //         <form action="{{ url('/admin/menu/eliminar/' . $platillo->id) }}" method="POST">
                //             @csrf
                //             @method('DELETE')

                //             <input type="submit" value="X" onclick="return confirm('¿Quieres borrar este platillo?')">
                //         </form>
                //     </ul>

                // @endforeach

            ],
        @endforeach
        
        // Agrega más categorías según sea necesario
    };

    // Función para mostrar los platillos de una categoría específica
    function showCategory(category) {
        var menuHTML = '';
        // Obtiene los platillos de la categoría seleccionada
        var items = menuItems[category];
        // Actualiza el título de la categoría seleccionada
        document.getElementById('categoriaSeleccionada').innerText = getCategoryName(category);
        // Genera el HTML de los cards para cada platillo
        for (var i = 0; i < items.length; i++) {
            if (i % 3 === 0) {
                menuHTML += '<div class="row">';
            }
            menuHTML += '<div class="col-md-4 mb-4">';
            menuHTML += '<div class="card" style="background-color: #BEA899; border: 4px solid #9F625B;">';
            menuHTML += '<div class="card-body d-flex flex-column justify-content-between">';
            menuHTML += '<h5 class="card-title text-center mb-4">' + items[i].titulo + '</h5>';
            menuHTML += '<p class="card-text">' + items[i].descripcion + '</p>';
            menuHTML += '<img src="storage/' + items[i].imagen +'" class="card-img-top mx-auto" alt="..." style="max-width: 150px; height: auto; border: 4px solid white;">'; // Establece el ancho máximo deseado para las imágenes (por ejemplo, 150px)
            menuHTML += '<h6 class="card-text mt-2">Precio: ' + items[i].precio + '</h6>';
            menuHTML +=
                '<a href="#" class="btn btn-success mx-auto" style="background-color: #9CA64E;">Agregar</a>'; // Botón centrado horizontalmente con estilo de fondo
            menuHTML += '</div></div></div>';
            if ((i + 1) % 3 === 0 || i === items.length - 1) {
                menuHTML += '</div>';
            }
        }
        // Muestra los cards en el contenedor correspondiente
        document.getElementById('menuContent').innerHTML = menuHTML;
    }

    // Retorna el nombre de la categoría dado su identificador
    function getCategoryName(category) {
        switch (category) {


            @foreach ($lista as $categoria)
                case '{{ $categoria->nombre }}':
                return '{{ $categoria->nombre }}';
            @endforeach
            // case 'categoria1':
            //     return 'Entradas';
            // case 'categoria2':
            //     return 'Hamburguesas';
            // case 'categoria3':
            //     return 'Especialidades';
            // case 'categoria4':
            //     return 'Nuevas Hamburguesas';
            // case 'categoria5':
            //     return 'Cortes';
            // case 'categoria6':
            //     return 'Parrilladas';
            // case 'categoria7':
            //     return 'Hot Dog';
            // case 'categoria8':
            //     return 'Burrittas';
            // case 'categoria9':
            //     return 'Boneless';
            // case 'categoria10':
            //     return 'Alambres';
            // case 'categoria11':
            //     return 'Aguachiles';
            // case 'categoria12':
            //     return 'Tacos';
            // case 'categoria13':
            //     return 'Ensaladas';
            // case 'categoria14':
            //     return 'Malteadas';
            // case 'categoria15':
            //     return 'Bebidas';
                // Agrega más casos según sea necesario
            default:
                return '';
        }
    }

    // Mostrar la primera categoría al cargar la página por defecto
    showCategory('categoria1');
</script>
