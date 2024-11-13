<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cyberbullying</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <header class="jumbotron text-center">
        <h1><i class="fas fa-shield-alt"></i> Cyberbullying en redes sociales</h1>
        <p><i class="fas fa-info-circle"></i> Foro informativo</p>
        <a href="servicios.php" class="btn btn-primary">
            
            <i class="fas fa-book-open"></i> Acceder a información

        </a>
        
    </header>
    


    <div class="container">
        <section class="mt-5">
            <h2 class="text-center">Donde buscar ayuda</h2>
            <div class="row">
                <div class="col-md-4"><img src="img/imagen1.jpg" class="img-fluid" alt="Imagen 1"></div>
                <div class="col-md-4"><img src="img/imagen2.jpg" class="img-fluid" alt="Imagen 2"></div>
                <div class="col-md-4"><img src="img/imagen3.jpg" class="img-fluid" alt="Imagen 3"></div>
            </div>
            <div class="text-center mt-3">
                <a href="galeria.php" class="btn btn-secondary">
                    <i class="fas fa-images"></i> leer mas Información
                </a>
            </div>
        </section>

        <!-- Nueva Sección de Información -->
        <section class="mt-5 bg-light p-4 rounded">
            <h2 class="text-center">Consejos de Seguridad en Internet</h2>
            <p class="text-center">Protégete en las redes sociales y aprende cómo evitar situaciones de riesgo.</p>
            <ul class="list-unstyled text-center">
                <li>Usa contraseñas seguras y únicas para cada cuenta.</li>
                <li>Evita compartir información personal en perfiles públicos.</li>
                <li>Bloquea y reporta cuentas que te acosen o intimiden.</li>
                <li>Configura adecuadamente la privacidad de tus perfiles.</li>
            </ul>
            <div class="text-center mt-3">
                <a href="consejos.php" class="btn btn-info">Leer más Consejos</a>
            </div>
        </section>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 WallsGS</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>