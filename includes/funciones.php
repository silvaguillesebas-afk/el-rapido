<?php
// Funciones generales de la aplicación

function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

function redirect($url) {
    header('Location: ' . $url);
    exit();
}

function isLoggedIn() {
    return isset($_SESSION['usuario_id']);
}

function getCurrentUser() {
    return $_SESSION['usuario_id'] ?? null;
}

function formatPrice($price) {
    return '$' . number_format($price, 2, ',', '.');
}

function getCartTotal() {
    return isset($_SESSION['carrito']) ? array_sum(array_column($_SESSION['carrito'], 'subtotal')) : 0;
}

function getCartCount() {
    return isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0;
}
?>