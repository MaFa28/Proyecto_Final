<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Show</title>
</head>
<body>

     <!--Navbar-->
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="/citas">
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
                    <li class="nav-item"><a class="nav-link" href="/dashboard">Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/citas/create">Crear Cita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mascotas/create">Nueva Mascota</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Detalles de la cita</h1>

    <div class="container">
        <div class="table-responsive-sm">
            <table class="table table-striped">
                <tr>
                        <th>Nombre mascota</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Raza</th>
                        <th>Comentario</th>
                        <th></th>
                </tr>
                <tr>
                    <td><ol>
                        @foreach ($cita->mascotas as $mascota)
                            <li>{{$mascota->nombre }}</li>
                        @endforeach
                    </ol></td>
                    <td>{{ $cita->correo }}</td>
                    <td>{{ $cita->telefono }}</td>
                    <td>{{ $cita->raza }}</td>
                    <td>{{ $cita->comentario }}</td>
                    <td>
                        <a class="btn btn-danger" href="/citas">Regresar</a>
                    </td>
                </tr>

            </table>

        </div>


</body>
</html>
