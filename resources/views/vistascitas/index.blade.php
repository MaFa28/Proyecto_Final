<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <title>Document</title>
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
        </div>
        </nav>


        <h2>Listado de Citas</h2><br>

        <div class="table-responsive-xxl">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Tipo de Mascota</th>
                    <th>Raza</th>
                    <th>Comentario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                @foreach ($citas as $cita)
                    <tr>
                        <td>
                            <a href="/citas/{{ $cita->id }}">
                            {{ $cita->id }}
                            </a>
                        </td>

                        <td>{{ $cita->nombre }}</td>
                        <td>{{ $cita->user->name }}</td>
                        <td>{{ $cita->correo }}</td>
                        <td>{{ $cita->telefono }}</td>
                        <td>{{ $cita->tipomascota }}</td>
                        <td>{{ $cita->raza }}</td>
                        <td>{{ $cita->comentario }}</td>

                        <td>
                            <a href="/citas/{{ $cita->id }}/edit">Editar</a>
                        </td>

                        <td>

                            <form action="/citas/{{ $cita->id }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

</body>
</html>
