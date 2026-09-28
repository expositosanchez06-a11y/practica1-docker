<?php

$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4",
        $dbUser,
        $dbPassword
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mensaje = "Conexión con MySQL realizada correctamente.";
} catch (PDOException $e) {
    $mensaje = "Error al conectar con MySQL: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 1 - Docker</title>
</head>
<body>

    <h1>Práctica 1 - Entorno de desarrollo con Docker</h1>

    <p>PHP está funcionando correctamente.</p>

    <p><?= htmlspecialchars($mensaje) ?></p>

</body>
</html>