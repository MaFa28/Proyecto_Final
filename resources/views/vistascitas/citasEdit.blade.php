<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Editar</title>
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
                    <li class="nav-item"><a class="nav-link" href="/cita/create">Crear Cita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mascotas/create">Nueva Mascota</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <form action="/citas/{{ $cita->id }}" method="POST">

            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" name="nombre" id="Nombre" class="form-control" value="{{ old('nombre') ?? $cita->nombre }}">
            </div>
            @error('nombre')
                <i>{{ $message }}</i>
            @enderror

            <div class="mb-3">
                <label for="correo" class="form-label">Correo: </label>
                <input type="email" name="correo" class="form-control" id="mail" value="{{ $cita->correo }}">
            </div>
            @error('correo')
                <i>{{ $message }}</i>
            @enderror

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="Telefono" value="{{ $cita->telefono  }}">
            </div>
            @error('Telefono')
                <i>{{ $message }}</i>
            @enderror

            <div class="mb-3">
                <label for="tipomascota" class="form-label">Tipo de mascota</label>
                <input type="text" name="tipomascota" class="form-control" id="Tipomascota" value="{{ $cita->tipomascota }}">
            </div>
            @error('tipomascota')
                <i>{{ $message }}</i>
            @enderror

            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <input type="text" name="raza" id="Raza" class="form-control" value="{{ $cita->raza }}">
            </div>
            @error('raza')
                <i>{{ $message }}</i>
            @enderror

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label><br>
                <textarea name="comentario" class="form-control" rows="6" cols="0">{{ $cita->comentario  }}</textarea>
            </div>
            @error('comentario')
                <i>{{ $message }}</i>
            @enderror

            <input type="submit" value="Enviar">

        </form>

    </div>

        <br>

        <div class="container">
            <a href="/citas">Regresar</a>
        </div>

</body>
</html>
