<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Inicio</title>
</head>
<body>



    <!--Navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">
                <img src="/imagenes/logogato.jpg" alt="gato" width="50">
            </a>

            <button class="navbar-toggler "
                type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link">Register</a></li>
                </ul>
            </div>


        </div>
    </nav>

    <!--Carrusel-->
    <div class="carousel slide" id="mainSlider" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="/imagenes/mascotas1.jpg" class="d-block" w-100 alt="">
            </div>
            <div class="carousel-item">
                <img  src="/imagenes/gato.jpg" class="d-block" w-100 alt="">
            </div>
            <div class="carousel-item">
                <img  src="/imagenes/perro1.jpg" class="d-block" w-100 alt="">
            </div>
        </div>

    </div>


</body>
</html>
