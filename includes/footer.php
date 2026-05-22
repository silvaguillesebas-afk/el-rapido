<?php
$current_year = date('Y');
?>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <div class="footer-logo">
                <img src="<?php echo APP_URL; ?>/assets/img/logo/logo.png" alt="El Rápido" class="footer-logo-img">
                <p>Tu kiosco de confianza.<br>Rápido, cerca y siempre<br>con las mejores ofertas.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon">📱</a>
                    <a href="#" class="social-icon">📷</a>
                    <a href="#" class="social-icon">👍</a>
                </div>
            </div>
        </div>
        
        <div class="footer-section">
            <h4>NAVEGACIÓN</h4>
            <ul>
                <li><a href="<?php echo APP_URL; ?>/index.php">Inicio</a></li>
                <li><a href="<?php echo APP_URL; ?>/productos.php">Productos</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>AYUDA</h4>
            <ul>
                <li><a href="<?php echo APP_URL; ?>/preguntas-frecuentes.php">Preguntas frecuentes</a></li>
                <li><a href="<?php echo APP_URL; ?>/politicas.php">Políticas</a></li>
                <li><a href="<?php echo APP_URL; ?>/terminos.php">Términos y condiciones</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>NOSOTROS</h4>
            <ul>
                <li><a href="<?php echo APP_URL; ?>/nosotros.php">Quiénes somos</a></li>
                <li><a href="<?php echo APP_URL; ?>/trabaja-con-nosotros.php">Trabaja con nosotros</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>CONTACTO</h4>
            <p>📞 +11 1234 5678</p>
            <p>📍 Av. San Martín 1234<br>Ciudad, Argentina</p>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>&copy; <?php echo $current_year; ?> El Rápido. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="<?php echo APP_URL; ?>/assets/js/app.js"></script>
</body>
</html>