<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Citas</title>
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


    <!---Form -->

            <div class="container">

                <form action="/citas" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="Nombre" value="{{ old('nombre') }}">
                    </div>
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" name="correo" class="form-control" id="mail" value="{{ old('correo') }}">
                    </div>
                    @error('correo')
                        <i>{{ $message }}</i>
                    @enderror

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" name="telefono" class="form-control" id="Telefono" value="{{ old('telefono') }}">
                    </div>
                    @error('telefono')
                        <i>{{ $message }}</i>
                    @enderror

                    <div class="mb-3">
                        <label for="tipomascota" class="form-label">Tipo de Mascota</label>
                        <input type="text" name="tipomascota" class="form-control" id="Tipomascota" value="{{ old('tipomascota') }}">
                    </div>
                    @error('tipomascota')
                        <i>{{ $message }}</i>
                    @enderror

                    <div class="mb-3">
                        <label for="raza" class="form-label">Raza:</label>
                        <input type="text" name="raza"  class="form-control" id="Raza" value="{{ old('raza') }}">
                    </div>
                    @error('raza')
                        <i>{{ $message }}</i>
                    @enderror

                    <div class="mb-3">
                        <label for="comentario" class="form-label"> Comentario:</label>
                        <textarea name="comentario" class="form-control" rows="6" cols="0" value="{{ old('comentario') }}"></textarea>
                    </div>
                    @error('comentario')
                        <i>{{ $message }}</
                    @enderror

                    <div class="mb-3">
                            <select name="mascota_id" id="">
                                @foreach ($mascotas as $mascota)
                                     <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                                @endforeach
                            </select>
                    </div>
                    <br>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>



                </form>

            </div>

</body>
</html>
