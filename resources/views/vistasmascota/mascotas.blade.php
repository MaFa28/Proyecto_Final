<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Mascotas</title>
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="/inicio">
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
                    <li class="nav-item"><a class="nav-link" href="/inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/citas/create">Crear Cita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mascotas/create">Nueva Mascota</a></li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <form action="/mascotas" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="Nombre" value="{{ old('nombre') }}">
                </div>
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror

                <div class="mb-3">
                    <label for="tipomascota" class="form-label">Tipo de Mascota:</label>
                    <input type="text" name="tipomascota" class="form-control" id="Mascota" value="{{ old('mascota') }}">

                </div>
                @error('tipomascota')
                    <i>{{ $message }}</i>
                @enderror

                <div class="mb-3">
                    <label for="raza" class="form-label">Raza:</label>
                    <input type="text" name="raza" class="form-control" id="Raza" value="{{ old('raza') }}">

                </div>
                @error('raza')
                    <i>{{ $message }}</i>
                @enderror

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="text" name="edad" class="form-control" id="Edad" value="{{ old('edad') }}">

                </div>
                @error('edad')
                    <i>{{ $message }}</i>
                @enderror

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </form>

        </div>

</body>
</html>
