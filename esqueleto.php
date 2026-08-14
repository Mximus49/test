<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MiProyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado / Hero Section -->
    <header class="container mt-5 text-center">
        <h1 class="display-4 fw-bold">Bienvenido a mi página</h1>
        <p class="lead text-muted">Una estructura simple, limpia y adaptable a cualquier dispositivo.</p>
        <a href="#" class="btn btn-primary btn-lg mt-3">Comenzar</a>
    </header>

    <!-- Contenido Principal -->
    <main class="container mt-5">
        <div class="row">
            
            <!-- Tarjeta 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">Sección 1</h3>
                        <p class="card-text text-muted">Aquí puedes describir la característica principal de tu proyecto o idea.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">Sección 2</h3>
                        <p class="card-text text-muted">Aprovecha este espacio para detalles técnicos, metodologías o herramientas usadas.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title">Sección 3</h3>
                        <p class="card-text text-muted">Agrega enlaces útiles, descargas o pasos a seguir para el usuario.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2026 Mi Proyecto. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
