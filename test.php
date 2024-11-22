<?php
include 'config.php';

try {
    $stmt = $pdo->query('SELECT * FROM libros');
    $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($libros) {
        echo '<pre>';
        print_r($libros);
        echo '</pre>';
    } else {
        echo 'No hay libros registrados.';
    }
} catch (PDOException $e) {
    echo 'Error en la consulta: ' . htmlspecialchars($e->getMessage());
}
?>
