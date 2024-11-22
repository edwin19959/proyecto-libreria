<?php
$host = 'localhost';
$dbname = 'libreria';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexión exitosa a la base de datos.';
} catch (PDOException $e) {
    echo 'Error en la conexión: ' . $e->getMessage();
}
?>
