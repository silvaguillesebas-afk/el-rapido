// Funciones específicas del carrito

class Carrito {
    constructor() {
        this.items = this.loadCarrito();
        this.initializeCart();
    }
    
    loadCarrito() {
        const saved = localStorage.getItem('carrito');
        return saved ? JSON.parse(saved) : [];
    }
    
    saveCarrito() {
        localStorage.setItem('carrito', JSON.stringify(this.items));
        this.updateCartDisplay();
    }
    
    addItem(item) {
        const existingItem = this.items.find(i => i.id === item.id);
        
        if (existingItem) {
            existingItem.quantity += item.quantity || 1;
        } else {
            this.items.push({
                ...item,
                quantity: item.quantity || 1
            });
        }
        
        this.saveCarrito();
    }
    
    removeItem(itemId) {
        this.items = this.items.filter(i => i.id !== itemId);
        this.saveCarrito();
    }
    
    updateQuantity(itemId, quantity) {
        const item = this.items.find(i => i.id === itemId);
        if (item) {
            item.quantity = quantity > 0 ? quantity : 1;
            this.saveCarrito();
        }
    }
    
    getTotal() {
        return this.items.reduce((total, item) => total + (item.price * item.quantity), 0);
    }
    
    getItemCount() {
        return this.items.reduce((count, item) => count + item.quantity, 0);
    }
    
    clear() {
        this.items = [];
        this.saveCarrito();
    }
    
    initializeCart() {
        this.updateCartDisplay();
    }
    
    updateCartDisplay() {
        const cartCount = document.querySelector('.cart-count');
        const cartTotal = document.querySelector('.cart-price');
        const cartItems = document.querySelector('.carrito-items');
        const cartFooter = document.querySelector('.carrito-footer');
        
        // Actualizar contador
        if (cartCount) {
            cartCount.textContent = this.getItemCount();
        }
        
        // Actualizar total
        if (cartTotal) {
            cartTotal.textContent = this.formatPrice(this.getTotal());
        }
        
        // Actualizar items
        if (cartItems) {
            if (this.items.length === 0) {
                cartItems.innerHTML = '<p class="carrito-vacio">Tu carrito está vacío</p>';
                if (cartFooter) cartFooter.style.display = 'none';
            } else {
                cartItems.innerHTML = this.items.map(item => `
                    <div class="carrito-item">
                        <div>
                            <span>${item.name}</span>
                            <small>Cantidad: ${item.quantity}</small>
                        </div>
                        <span>${this.formatPrice(item.price * item.quantity)}</span>
                        <button onclick="carrito.removeItem('${item.id}')" class="btn-remove">✕</button>
                    </div>
                `).join('');
                if (cartFooter) cartFooter.style.display = 'block';
            }
        }
    }
    
    formatPrice(price) {
        return new Intl.NumberFormat('es-AR', {
            style: 'currency',
            currency: 'ARS'
        }).format(price);
    }
}

// Instancia global del carrito
const carrito = new Carrito();

// Event listeners para botones de agregar al carrito
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const price = parseFloat(this.dataset.price);
            
            carrito.addItem({
                id: productId,
                name: productName,
                price: price
            });
            
            showToast('Producto agregado al carrito', 'success');
        });
    });
});
