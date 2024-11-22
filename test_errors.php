<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';
try {
    $stmt = $pdo->query('SELECT 1');
    echo 'Conexión exitosa a la base de datos';
} catch (PDOException $e) {
    echo 'Error en la conexión: ' . $e->getMessage();
}

echo $undefined_variable; // Genera un error intencional
?>