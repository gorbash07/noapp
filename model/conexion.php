
<?php
// Configuración de la base de datos
if (!defined('SERVIDOR')) {
    define('SERVIDOR', 'localhost');
}
if (!defined('USUARIO')) {
    define('USUARIO', 'root');
}
if (!defined('PASSWORD')) {
    define('PASSWORD', '');
}
if (!defined('BD')) {
    define('BD', 'sistemadenomina');
}
if (!defined('APP_URL')) {
    define('APP_URL', 'http://localhost/noapp');
}

$dsn = "mysql:host=" . SERVIDOR . ";dbname=" . BD . ";charset=utf8mb4";

try {
    // Usamos utf8mb4
    // Activamos el modo de excepciones para que PHP nos avise si una consulta SQL falla
    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $pdo = new PDO($dsn, USUARIO, PASSWORD, $opciones);
    
    //echo "¡Conexión exitosa a la nómina!"; 

} catch (PDOException $e) {
    echo "Error crítico: No se pudo conectar a la base de datos.<br>";
    echo "Detalle del error: " . $e->getMessage();
    exit;
}

