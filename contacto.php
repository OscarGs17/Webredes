<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>
    <?php include 'db.php'; ?>

    <div class="container mt-5">
        <h2>Contacto</h2>

        <?php
        // Procesa el formulario solo si se ha enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];

            // Preparar la consulta SQL para insertar los datos
            $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nombre, $email, $mensaje);

            // Ejecutar la consulta y mostrar un mensaje
            if ($stmt->execute()) {
                echo "<p class='alert alert-success'>Gracias, $nombre. Hemos recibido tu mensaje.</p>";
            } else {
                echo "<p class='alert alert-danger'>Error al enviar el mensaje. Inténtalo de nuevo.</p>";
            }
            
            // Cerrar la declaración y la conexión
            $stmt->close();
        }

        $conn->close();
        ?>

        <form id="contactForm" action="" method="POST" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
