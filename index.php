<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <h1>
                <span class="hero-subtitle">¡Bienvenido a</span>
                El Rápido
            </h1>
            <p>Tu kiosco de confianza. Rápido, cerca y siempre con las mejores ofertas. Compra desde tu casa y recibe en tu puerta.</p>
            
            <div class="hero-buttons">
                <a href="<?php echo APP_URL; ?>/productos.php" class="btn btn-primary">🛒 Ver productos</a>
                <a href="#ubicacion" class="btn btn-secondary">📍 Ubicación</a>
            </div>
            
            <div class="hero-status">
                <div class="status-open">
                    <span class="status-indicator"></span>
                    <span>Abierto ahora • Lun-Dom 8:00 - 21:00</span>
                </div>
            </div>
        </div>
        
        <div class="hero-image">
            <img src="<?php echo APP_URL; ?>/assets/img/hero/bolsa-compras.png" alt="Bolsa de compras" />
        </div>
    </div>
</section>

<!-- CATEGORÍAS -->
<section class="categories">
    <h2 class="section-title">Categorías populares</h2>
    <div class="categories-grid">
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=lacteos" class="category-card">
            <div class="category-icon">🥛</div>
            <p>Lácteos</p>
        </a>
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=bebidas" class="category-card">
            <div class="category-icon">🥤</div>
            <p>Bebidas</p>
        </a>
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=snacks" class="category-card">
            <div class="category-icon">🍿</div>
            <p>Snacks</p>
        </a>
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=dulces" class="category-card">
            <div class="category-icon">🍫</div>
            <p>Dulces</p>
        </a>
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=golosinas" class="category-card">
            <div class="category-icon">🍭</div>
            <p>Golosinas</p>
        </a>
        <a href="<?php echo APP_URL; ?>/productos.php?categoria=alimentos" class="category-card">
            <div class="category-icon">🥫</div>
            <p>Alimentos</p>
        </a>
    </div>
</section>

<!-- PROMOCIONES -->
<section class="promotions">
    <h2 class="section-title">
        Promociones especiales
        <a href="<?php echo APP_URL; ?>/promociones.php">Ver todas →</a>
    </h2>
    <div class="promotions-grid">
        <div class="promo-card promo-red">
            <div class="promo-content">
                <div class="promo-label">PROMO ESPECIAL</div>
                <div class="promo-title">Chocolates</div>
                <div class="promo-price">$49,99</div>
                <div class="promo-description">Aprox. 200g</div>
            </div>
        </div>
        
        <div class="promo-card promo-yellow">
            <div class="promo-content">
                <div class="promo-label">OFERTA</div>
                <div class="promo-title">Gaseosa 2L</div>
                <div class="promo-price">$79,99</div>
                <div class="promo-description">Variedades disponibles</div>
            </div>
        </div>
        
        <div class="promo-card promo-red">
            <div class="promo-content">
                <div class="promo-label">PROMOCIÓN</div>
                <div class="promo-title">Yogur x4</div>
                <div class="promo-price">$129,99</div>
                <div class="promo-description">Diferentes sabores</div>
            </div>
        </div>
    </div>
</section>

<!-- COMPRAS SEMANALES -->
<section class="weekly-purchases">
    <h2 class="section-title">
        Compras semanales recomendadas
        <a href="<?php echo APP_URL; ?>/compras-semanales.php">Ver todas →</a>
    </h2>
    <div class="purchases-grid">
        <div class="purchase-card">
            <div class="purchase-info">
                <h4>Pack básico semanal</h4>
                <p>Incluye: leche, pan, huevos, verduras esenciales</p>
            </div>
            <div class="purchase-price">$599,99</div>
            <button class="purchase-btn" onclick="addToCart('pack-basico', 'Pack básico semanal', 599.99)">🛒</button>
        </div>
        
        <div class="purchase-card">
            <div class="purchase-info">
                <h4>Pack familia</h4>
                <p>Incluye: alimentos frescos variados para toda la semana</p>
            </div>
            <div class="purchase-price">$999,99</div>
            <button class="purchase-btn" onclick="addToCart('pack-familia', 'Pack familia', 999.99)">🛒</button>
        </div>
        
        <div class="purchase-card">
            <div class="purchase-info">
                <h4>Pack dulce</h4>
                <p>Incluye: chocolates, galletas, dulces y golosinas</p>
            </div>
            <div class="purchase-price">$449,99</div>
            <button class="purchase-btn" onclick="addToCart('pack-dulce', 'Pack dulce', 449.99)">🛒</button>
        </div>
    </div>
    <button class="save-purchase-btn" onclick="showToast('Compra guardada en tus favoritos', 'success')">⭐ Guardar mis compras favoritas</button>
</section>

<!-- CARACTERÍSITCAS -->
<section class="features">
    <div class="features-container">
        <div class="feature-item">
            <div class="feature-icon">⚡</div>
            <div class="feature-content">
                <h4>Rápido y confiable</h4>
                <p>Entrega en 24hs a tu domicilio</p>
            </div>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">💰</div>
            <div class="feature-content">
                <h4>Mejores precios</h4>
                <p>Ofertas y promociones exclusivas</p>
            </div>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">🔒</div>
            <div class="feature-content">
                <h4>Compra segura</h4>
                <p>Tus datos están protegidos</p>
            </div>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">📱</div>
            <div class="feature-content">
                <h4>Fácil de usar</h4>
                <p>Compra desde tu celular o computadora</p>
            </div>
        </div>
    </div>
</section>

<!-- UBICACIÓN -->
<section class="location" id="ubicacion">
    <h2 class="section-title">Nuestra ubicación</h2>
    <div class="location-grid">
        <div class="location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.2373836445827!2d-58.45234!3d-34.6037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb85b9d3e8c39%3A0x123456789!2sEl%20Rapido%20Kiosco!5e0!3m2!1ses!2sar!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="location-info">
            <h3>📍 El Rápido - Tu Kiosco de Confianza</h3>
            
            <div class="location-details">
                <span>📍</span>
                <p>Avenida San Martín 1234<br>Buenos Aires, Argentina</p>
            </div>
            
            <div class="location-details">
                <span>📞</span>
                <p>+11 1234 5678</p>
            </div>
            
            <div class="location-details">
                <span>✉️</span>
                <p>info@elrapido.com.ar</p>
            </div>
            
            <div class="location-hours">
                <strong>Horarios de atención:</strong><br>
                Lunes a Domingo<br>
                08:00 - 21:00 hs
            </div>
            
            <a href="https://wa.me/541123445678" class="location-btn" target="_blank">
                💬 Consultar por WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include 'includes/whatsapp.php'; ?>
<?php include 'includes/footer.php'; ?>
