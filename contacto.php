<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Librería</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Contacto</h1>
    </header>
    <main class="container mt-5">
        <h2>Formulario de Contacto</h2>
        <form action="guardar_comentario.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Tu Nombre" title="Por favor, introduce tu nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Tu Correo" title="Por favor, introduce tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" required placeholder="Asunto del Mensaje" title="Por favor, introduce el asunto del mensaje">
            </div>
            <div class="form-group">
                <label for="comentario">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" required placeholder="Tu Comentario" title="Por favor, introduce tu comentario"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
</body>
</html>
