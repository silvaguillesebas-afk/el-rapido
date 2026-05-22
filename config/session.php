<?php
// Configuración de sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('SESSION_TIMEOUT', 1800); // 30 minutos

// Validar timeout de sesión
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_destroy();
    header('Location: ' . APP_URL . '/login.php');
    exit();
}

$_SESSION['last_activity'] = time();
?>