<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
    $fecha = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) 
                           VALUES (:fecha, :correo, :nombre, :asunto, :comentario)");
    $stmt->execute([
        ':fecha' => $fecha,
        ':correo' => $correo,
        ':nombre' => $nombre,
        ':asunto' => $asunto,
        ':comentario' => $comentario
    ]);

    echo "¡Gracias por contactarnos!";
}
?>
