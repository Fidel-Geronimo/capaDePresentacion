<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/materia/bootstrap.min.css">
    <title>Tareas</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Tareas</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h1>Listado de Tareas</h1>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Fecha</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Realizar tareas de programacion</td>
                    <td>Realizar tarea de programacion para el proximo martes, MVC</td>
                    <td>30-2-2022</td>
                    <td><button class="btn btn-danger">Eliminar</button>
                        <button class="btn btn-warning">Editar</button>
                    </td>

                </tr>
                <tr>
                    <td>Tarea de Fisica</td>
                    <td>Realizar tarea de fisica para el lunes 22 de feb</td>
                    <td>30-2-2022</td>
                    <td><button class="btn btn-danger">Eliminar</button>
                        <button class="btn btn-warning">Editar</button>
                    </td>

                </tr>
                <tr>
                    <td>Tarea de matematica</td>
                    <td>Avanzar Ejercicios de calculo integral</td>
                    <td>30-2-2022</td>
                    <td><button class="btn btn-danger">Eliminar</button>
                        <button class="btn btn-warning">Editar</button>
                    </td>


                </tr>
                <tr>
                    <td>Tarea de Literatura</td>
                    <td>Leer obras de Juan Bosch</td>
                    <td>30-2-2022</td>
                    <td><button class="btn btn-danger">Eliminar</button>
                        <button class="btn btn-warning">Editar</button>
                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>