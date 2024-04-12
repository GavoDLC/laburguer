

@include('burguesia.header')


{{-- justify-content-center text-center --}}

<br>
    <div class="text-center">
        <!--le cambie la escala a 75%-->
        <!--tambien le puse style="border:0; border-radius: 20px;"-->
        <video src="img/LaBurguesiaDelPueblo(HD).mp4" class="object-fit-scale" width="75%" autoplay controls muted style="border:0; border-radius: 15px;"></video>
    </div>

    <!--agrege brs-->
    <br><br><br>
   
    <!--sliders-->
    <!--agrege tambien rounded-->
    <div class="container">
    <div class="row">
        <div class="col-md-7">
            <div id="carouselExample" class="carousel slide rounded" data-bs-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagen1.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen2.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen3.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <!--Agrege mas imagnes-->
                    <div class="carousel-item">
                        <img src="img/imagen4.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen5.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen6.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen7.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--mapa-->
        <!--le cambie los borde de las puntas con rounded y border-radius etc tambien cambie el tamaño del mapa-->
        <div class="col-md-5">
            <div class="text-center rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15118.796060141516!2d-88.389356!3d18.6774977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5bb19cacac039d%3A0xf78e6e0a829b436a!2sLa%20Burgues%C3%ADa%20del%20Pueblo!5e0!3m2!1ses!2smx!4v1710813132548!5m2!1ses!2smx"
                    width="100%" height="495" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<!--agrege brs-->
<br><br><br><br>


<!--ingresar comentarios-->
    <div class="text-center justify-content-center">
        <h2>——— Comentarios ———</h2>
        <h3>Deja tu comentario</h3>

        <div style="display: flex; justify-content: center;">
            <form action="{{url('/')}}" class="col-5" method="POST">
                @csrf
                <div class="form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" aria-describedby="nombreHelp" required>
                </div>

                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Ingresa un comentario" required></textarea>
                </div>
<br>
                <div class="form-group">
                    <label for="puntuacion">Calificación:</label>
                    <select class="form-control" id="puntuacion" name="puntuacion" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">1 estrella</option>
                        <option value="2">2 estrellas</option>
                        <option value="3">3 estrellas</option>
                        <option value="4">4 estrellas</option>
                        <option value="5">5 estrellas</option>
                    </select>
                </div>
<br>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>
        </div>
        <br>
        <!--ventana flotante Contactos-->
        <div id="ventanaFlotante" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h4>Contactenos en:</h4>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img class="imgVentana" src="img/burguesia.jpeg" alt="BP La Burguesía del Pueblo" width="100px" height="150px">
                        </div>
                        
                        <div class="col-7">
                            <br>
                            <div class="contact-info">
                                <img src="img/whatsapp.png" alt="WhatsApp" class="contact-icon"><p>983 120 8934</p>                           
                            </div>
                            <div class="contact-info">
                                <img src="img/gmail.png" alt="Gmail" class="contact-icon"><p>laburguesia.bacalar@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ventana flotante contactos-->

        <!--ventana flotante Horarios-->
        <div id="ventanaFlotanteHorario" class="ventana">
            <div id="modalHorario"class="modal">
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


        <!--comentarios-->
        <!--modificado-->
        <div id="comentarios">
            <h3>Comentarios recientes</h3>
        </div>


        {{-- comentarios funcionales --}}
        @foreach ($comentarios as $comentario)
        <div class="container mt-4 col-7">
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                        </div>
                        <div class="border p-3">
                            <p class="mb-0"><strong>{{$comentario->nombre}}:</strong>{{$comentario->comentario}}</p>
                            <br><p>{{$comentario->puntuacion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

{{-- 
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@include('burguesia.footer')      