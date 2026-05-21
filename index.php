<?php
$page_title = 'Inicio';
require_once './includes/header.php';
?>

<?php require_once './includes/navbar.php'; ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <div style="background: linear-gradient(90deg, white 50%, transparent 50%); padding: 5px 10px; width: fit-content; border-radius: 3px; margin-bottom: 20px; font-weight: bold; color: var(--primary-color); font-size: 0.9em;">
                MAXI KIOSCO
            </div>
            
            <h1>
                TODO LO QUE NECESITÁS,
                <span style="color: var(--primary-color); font-style: italic;">RÁPIDO</span>
                Y CERCA TUYO
            </h1>
            
            <p>Bebidas, snacks, cigarrillos, recargas y mucho más.</p>
            
            <div class="hero-buttons">
                <a href="https://wa.me/541123445678" class="btn btn-primary">PEDIR POR WHATSAPP</a>
                <a href="#" class="btn btn-secondary">VER UBICACIÓN</a>
            </div>
            
            <div class="hero-status">
                <div class="status-open">
                    <span class="status-indicator"></span>
                    Abierto ahora
                </div>
                <div>08:00 a 01:00 hs</div>
            </div>
        </div>
        
        <div class="hero-image">
            <img src="<?php echo APP_URL; ?>/assets/img/banners/banner-home.png" alt="Kiosco El Rápido">
        </div>
    </div>
</section>

<?php require_once './includes/footer.php'; ?>