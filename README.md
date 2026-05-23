# 🛒 El Rápido - Plataforma de E-Commerce para Kiosco

Plataforma web moderna para un kiosco argentino, permitiendo a los clientes comprar productos en línea con entregas a domicilio.

## 🌟 Características

- ✅ **Catálogo de productos** organizado por categorías
- ✅ **Carrito de compras** con almacenamiento local
- ✅ **Compras semanales recomendadas**
- ✅ **Promociones especiales**
- ✅ **Ubicación en mapa interactivo**
- ✅ **Integración con WhatsApp**
- ✅ **Diseño responsive** (móvil, tablet, desktop)
- ✅ **Animaciones fluidas**
- ✅ **Panel de administración** (en desarrollo)

## 🚀 Tecnologías Utilizadas

- **Backend**: PHP 7.4+
- **Base de datos**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript Vanilla
- **Librerías**: PWA-ready, LocalStorage

## 📁 Estructura del Proyecto

```
el-rapido/
├── config/
│   ├── app.php              # Configuración general
│   ├── database.php         # Conexión a BD
│   └── session.php          # Sesiones
├── includes/
│   ├── header.php           # Header HTML
│   ├── navbar.php           # Navegación
│   ├── footer.php           # Footer
│   ├── funciones.php        # Funciones globales
│   ├── carrito-lateral.php  # Widget carrito
│   └── whatsapp.php         # Widget WhatsApp
├── database/
│   └── conexion.php         # Clase de conexión
├── assets/
│   ├── css/
│   │   ├── style.css        # Estilos principales
│   │   ├── responsive.css   # Media queries
│   │   └── animaciones.css  # Animaciones
│   ├── js/
│   │   ├── app.js           # JavaScript general
│   │   └── carrito.js       # Lógica del carrito
│   └── img/
│       ├── logo/
│       └── hero/
└── index.php                # Página principal
```

## 🔧 Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/silvaguillesebas-afk/el-rapido.git
   ```

2. **Crear la base de datos**
   ```sql
   CREATE DATABASE el_rapido CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

3. **Configurar variables de entorno**
   - Editar `config/database.php` con tus datos de MySQL
   - Actualizar `APP_URL` en `config/app.php`

4. **Ejecutar en local**
   ```bash
   php -S localhost:8000
   ```

## 🎯 Rutas principales

- `/` - Página de inicio
- `/productos.php` - Catálogo de productos
- `/carrito.php` - Carrito de compras
- `/compras-semanales.php` - Compras recomendadas
- `/promociones.php` - Promociones activas

## 💾 LocalStorage

El carrito se guarda automáticamente en el navegador usando LocalStorage:

```javascript
// Agregar item
carrito.addItem({id: '1', name: 'Producto', price: 100});

// Obtener total
const total = carrito.getTotal();

// Limpiar carrito
carrito.clear();
```

## 🔐 Seguridad

- ✅ Validación de formularios
- ✅ Sanitización de datos
- ✅ Hash de contraseñas con BCRYPT
- ✅ Protección CSRF (en desarrollo)
- ✅ Sesiones seguras

## 📱 Responsive Design

- ✅ Mobile first
- ✅ Tablet optimizado
- ✅ Desktop completo
- ✅ Breakpoints: 320px, 480px, 768px, 1024px, 1400px+

## 🎨 Personalización de Colores

Editar en `assets/css/style.css`:

```css
:root {
    --primary-color: #DC143C;      /* Rojo principal */
    --secondary-color: #FFD700;    /* Amarillo */
    --text-dark: #1A1A1A;          /* Texto oscuro */
    /* ... más colores */
}
```

## 📞 Contacto

- **WhatsApp**: [541123445678](https://wa.me/541123445678)
- **Email**: info@elrapido.com.ar
- **Ubicación**: Av. San Martín 1234, Buenos Aires, Argentina

## 📄 Licencia

Este proyecto está bajo la licencia MIT.

## 👨‍💻 Autor

**Sebastián Silva** - [GitHub](https://github.com/silvaguillesebas-afk)

---

⭐ Si te gusta este proyecto, ¡dale una estrella!
