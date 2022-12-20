<!DOCTYPE html>
<!-- lang zxx por uso de lorem -->
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio grupo 4 de diseño de interfaces.">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Portafolio</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="shortcut icon" href="../img/icon-page.webp" type="image/x-icon">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- INICIO DEL HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Portafolio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Inicio<span class="sr-only">(current)</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('experience')}}" class="nav-link">Experiencia</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN DEL HEADER -->

    @yield('content')

    <!-- INICIO FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="redes-sociales">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a> </li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                    <p class="cpryt">© Copyright 2022 Portafolio | Plantilla Hecha por<a href="#"> Grupo N° ..</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- FIN FOOTER -->
</body>
</html>
