<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Películas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
<body class="container">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FILMS</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/films">Todas las Pelis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/oldFilms">Pelis Antiguas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/newFilms">Pelis Nuevas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/sortFilms">Ordenar Pelis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/countFilms">Contar Pelis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/filmsByYear">Pelis por Año</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filmout/filmsByGenre">Pelis por Género</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>
    <h1 class="mt-4">Contador de Películas</h1>
    <p class="lead">El número total de películas registradas es:</p>

    <div class="alert alert-primary">
        <h2>{{ $totalFilms }}</h2>
    </div>

    <a href="/" class="btn btn-secondary mt-4">Volver al inicio</a>
</body>

</html>
