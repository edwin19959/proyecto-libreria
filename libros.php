<?php
include 'config.php';
try {
    $stmt = $pdo->query('SELECT * FROM libros');
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['titulo']) . '</h5>';
            echo '<p class="card-text">Autor: ' . htmlspecialchars($row['autor']) . '</p>';
            echo '<p class="card-text">Género: ' . htmlspecialchars($row['genero']) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay libros registrados.</p>';
    }
} catch (PDOException $e) {
    echo '<p>Error en la consulta: ' . htmlspecialchars($e->getMessage()) . '</p>';
}
?>
