<?php
require_once dirname(__DIR__) . '/config/app.php';
require_once dirname(__DIR__) . '/config/session.php';
require_once dirname(__DIR__) . '/includes/funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>El Rápido - Tu Kiosco de Confianza</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/animaciones.css">
</head>
<body>