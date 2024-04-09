<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proyecto.css') }}">
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <title>La burguesía</title>
</head>

<body>

<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <!-- Logo y título -->
        <a class="navbar-brand dropdown-center d-flex" href="#">
            <img src="img/logo2-removebg-preview.png" alt="BP La Burguesía del Pueblo" width="70" height="70"
                class="">
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
                    <a class="nav-link text-white" aria-current="page" href="{{url('/')}}" style="font-size: 18px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/misionvision')}}" style="font-size: 18px;">Visión y Misión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/menu')}}" style="font-size: 18px;">Menú</a>
                </li>
                <!--modificado-->
                <li onClick = "openModal()" class="nav-item">
                    <a id="horarios-link" class="nav-link text-white header-heading header" aria-current="page" style="font-size: 18px;" data-toggle="modal" data-target="#ventanaFlotanteHorario">Horarios</a>
                </li>
                <!--modificado-->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/#comentarios')}}" style="font-size: 18px;">Comentarios</a>
                </li>
                <!--modificado-->
            </ul>
            <form action="#">
                <button type="submit" style="background:none; border:none;"><img src="img/anadir-al-carrito.png" width="40" alt="" class="bg-none"></button>
            </form>
        </div>
    </div>
</nav>

<!--quite 2 brs-->
<br><br><br><br>
@include('burguesia.modalHorario')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!--scripts de la ventana flotante Horarios-->
<script>
    function openModal(){
        const modal = document.getElementById("ventanaFlotanteHorario");
        modal.style.display = "block";
    }
</script>
<!--scripts de la ventana flotante Horarios-->
</html>