<?php
include 'config.php';
try {
    $stmt = $pdo->query('SELECT DISTINCT autor FROM libros');
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['autor']) . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay autores registrados.</p>';
    }
} catch (PDOException $e) {
    echo '<p>Error en la consulta: ' . htmlspecialchars($e->getMessage()) . '</p>';
}
?>
