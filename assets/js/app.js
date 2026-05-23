// Variables globales
const APP_URL = '<?php echo APP_URL; ?>';

// Funciones de utilidad
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

function toggleCarrito() {
    const carrito = document.getElementById('carritoLateral');
    if (carrito) {
        carrito.classList.toggle('active');
    }
}

function formatPrice(price) {
    return new Intl.NumberFormat('es-AR', {
        style: 'currency',
        currency: 'ARS'
    }).format(price);
}

// Agregar al carrito
function addToCart(productId, productName, price) {
    fetch(`${APP_URL}/api/carrito.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            action: 'add',
            product_id: productId,
            product_name: productName,
            price: price,
            quantity: 1
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Producto agregado al carrito', 'success');
            updateCartCount();
        } else {
            showToast('Error al agregar el producto', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Error en la conexión', 'error');
    });
}

// Actualizar contador del carrito
function updateCartCount() {
    fetch(`${APP_URL}/api/carrito.php?action=count`)
    .then(response => response.json())
    .then(data => {
        const cartCount = document.querySelector('.cart-count');
        if (cartCount) {
            cartCount.textContent = data.count;
        }
    })
    .catch(error => console.error('Error:', error));
}

// Modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('show');
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('show');
    }
}

// Cerrar modal al hacer click fuera
window.addEventListener('click', function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.classList.remove('show');
    }
});

// Validación de formularios
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input, textarea');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('error');
            isValid = false;
        } else {
            input.classList.remove('error');
        }
    });
    
    return isValid;
}

// Guardar compra semanal
function saveWeeklyPurchase(purchaseId) {
    fetch(`${APP_URL}/api/compras-semanales.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            action: 'save',
            purchase_id: purchaseId
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Compra guardada exitosamente', 'success');
        } else {
            showToast('Error al guardar la compra', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Error en la conexión', 'error');
    });
}

// Inicialización al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
    
    // Inicializar tooltips o poppers si es necesario
    // initializeTooltips();
});

// Service Worker para PWA (opcional)
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register(`${APP_URL}/sw.js`).catch(() => {
        // Service Worker no disponible
    });
}