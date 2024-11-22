<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $comentario = htmlspecialchars($_POST['comentario']);

    if (!empty($nombre) && !empty($correo) && !empty($comentario)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO comentarios (nombre, correo, comentario) VALUES (?, ?, ?)');
            $stmt->execute([$nombre, $correo, $comentario]);
            echo '<p>Comentario guardado exitosamente. ¡Gracias por tu aporte!</p>';
        } catch (PDOException $e) {
            echo '<p>Error al guardar el comentario: ' . htmlspecialchars($e->getMessage()) . '</p>';
        }
    } else {
        echo '<p>Por favor, complete todos los campos.</p>';
    }
}
?>
