<?php
define('APP_NAME', 'SISTEMA DE GESTION CLINICA VETERINARIA PETS HOME');
define('SERVIDOR', '127.0.0.1');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'clinicaveterinaria');

$URL = "http://localhost/sistemagestionveterinaria";

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

date_default_timezone_set("America/Caracas");
$fechaHora = date('Y-m-d H:i:s');

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD);
    echo "<script>console.log('Connected to the database successfully!');</script>";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}