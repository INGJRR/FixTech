<?php
// Detecta si la petición viene del servidor local
$isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');

if ($isLocal) {
    // Configuración para tu entorno LOCAL
    $host     = 'localhost';
    $dbname   = 'tu_bd_local';
    $user     = 'root';
    $password = '';
    $port     = '3306';
} else {
    // Configuración para PRODUCCIÓN (InfinityFree)
    $host     = 'sqlXXX.infinityfree.com';
    $dbname   = 'if0_XXXXXXXX_midb';
    $user     = 'if0_XXXXXXXX';
    $password = 'TU_CONTRASEÑA_INFINITYFREE';
    $port     = '3306';
}

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>