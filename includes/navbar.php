<?php
$cart_count = getCartCount();
$cart_total = formatPrice(getCartTotal());
$is_logged = isLoggedIn();
?>
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <a href="<?php echo APP_URL; ?>/index.php">
                <img src="<?php echo APP_URL; ?>/assets/img/logo/logo.png" alt="El Rápido Logo" class="logo-img">
            </a>
        </div>
        
        <ul class="navbar-menu">
            <li><a href="<?php echo APP_URL; ?>/index.php" class="nav-link active">🏠 Inicio</a></li>
            <li><a href="<?php echo APP_URL; ?>/productos.php" class="nav-link">🛒 Productos</a></li>
        </ul>
        
        <div class="navbar-right">
            <div class="cart-icon">
                <a href="<?php echo APP_URL; ?>/carrito.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="cart-count"><?php echo $cart_count; ?></span>
                </a>
                <span class="cart-price"><?php echo $cart_total; ?></span>
            </div>
            
            <div class="user-menu">
                <?php if ($is_logged): ?>
                    <a href="<?php echo APP_URL; ?>/mi-cuenta.php" class="user-link">👤 Mi cuenta</a>
                    <a href="<?php echo APP_URL; ?>/logout.php" class="logout-link">Salir</a>
                <?php else: ?>
                    <a href="<?php echo APP_URL; ?>/login.php" class="user-link">👤 Iniciar sesión</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>