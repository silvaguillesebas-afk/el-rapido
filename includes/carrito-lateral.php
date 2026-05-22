<?php
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$total_items = count($_SESSION['carrito']);
$total_price = array_sum(array_column($_SESSION['carrito'], 'subtotal'));
?>
<div class="carrito-lateral" id="carritoLateral">
    <div class="carrito-header">
        <h3>Mi Carrito</h3>
        <button class="close-carrito" onclick="toggleCarrito()">&times;</button>
    </div>
    
    <div class="carrito-items">
        <?php if ($total_items > 0): ?>
            <?php foreach ($_SESSION['carrito'] as $item): ?>
                <div class="carrito-item">
                    <span><?php echo htmlspecialchars($item['nombre']); ?></span>
                    <span><?php echo formatPrice($item['subtotal']); ?></span>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="carrito-vacio">Tu carrito está vacío</p>
        <?php endif; ?>
    </div>
    
    <div class="carrito-footer">
        <div class="carrito-total">
            <strong>Total: <?php echo formatPrice($total_price); ?></strong>
        </div>
        <a href="<?php echo APP_URL; ?>/carrito.php" class="btn-carrito">Ver carrito completo</a>
    </div>
</div>