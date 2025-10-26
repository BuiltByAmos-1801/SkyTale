// SkyTale Electronics - Main JavaScript File

// Global variables
let cart = JSON.parse(localStorage.getItem('cart')) || [];
let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
let currentUser = JSON.parse(localStorage.getItem('currentUser')) || null;

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// Initialize application
function initializeApp() {
    setupThemeToggle();
    setupSmoothScrolling();
    setupMobileMenu();
    setupCart();
    setupWishlist();
    setupSearch();
    setupFilters();
    setupProductGallery();
    setupQuantityControls();
    setupFormValidation();
    updateCartUI();
    updateWishlistUI();
    setupAnimations();
}

// Theme toggle functionality
function setupThemeToggle() {
    const themeToggle = document.getElementById('theme-toggle');
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    document.documentElement.setAttribute('data-theme', currentTheme);
    
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Add animation
            document.body.style.transition = 'all 0.3s ease';
            setTimeout(() => {
                document.body.style.transition = '';
            }, 300);
        });
    }
}

// Smooth scrolling for anchor links
function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Mobile menu functionality
function setupMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenuToggle.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                mobileMenuToggle.classList.remove('active');
            }
        });
    }
}

// Cart functionality
function setupCart() {
    // Add to cart buttons
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-cart')) {
            e.preventDefault();
            const productId = e.target.dataset.productId;
            const productName = e.target.dataset.productName;
            const productPrice = parseFloat(e.target.dataset.productPrice);
            const productImage = e.target.dataset.productImage;
            
            addToCart(productId, productName, productPrice, productImage);
        }
        
        // Remove from cart
        if (e.target.classList.contains('remove-from-cart')) {
            const productId = e.target.dataset.productId;
            removeFromCart(productId);
        }
        
        // Update quantity
        if (e.target.classList.contains('quantity-btn')) {
            const productId = e.target.dataset.productId;
            const action = e.target.dataset.action;
            updateCartQuantity(productId, action);
        }
    });
}

function addToCart(productId, name, price, image) {
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: 1
        });
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartUI();
    showToast('Product added to cart!', 'success');
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartUI();
    showToast('Product removed from cart!', 'success');
}

function updateCartQuantity(productId, action) {
    const item = cart.find(item => item.id === productId);
    
    if (item) {
        if (action === 'increase') {
            item.quantity += 1;
        } else if (action === 'decrease' && item.quantity > 1) {
            item.quantity -= 1;
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartUI();
    }
}

function updateCartUI() {
    const cartCount = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');
    const cartItems = document.getElementById('cart-items');
    
    // Update cart count
    if (cartCount) {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;
        cartCount.style.display = totalItems > 0 ? 'block' : 'none';
    }
    
    // Update cart total
    if (cartTotal) {
        const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        cartTotal.textContent = `$${total.toFixed(2)}`;
    }
    
    // Update cart items list
    if (cartItems) {
        cartItems.innerHTML = '';
        
        if (cart.length === 0) {
            cartItems.innerHTML = '<p class="text-center text-gray-500 py-8">Your cart is empty</p>';
        } else {
            cart.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold">${item.name}</h3>
                        <p class="text-primary">$${item.price.toFixed(2)}</p>
                        <div class="quantity-controls">
                            <button class="quantity-btn" data-product-id="${item.id}" data-action="decrease">-</button>
                            <span class="px-2">${item.quantity}</span>
                            <button class="quantity-btn" data-product-id="${item.id}" data-action="increase">+</button>
                        </div>
                    </div>
                    <button class="remove-from-cart text-red-500 hover:text-red-700" data-product-id="${item.id}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                `;
                cartItems.appendChild(cartItem);
            });
        }
    }
}

// Wishlist functionality
function setupWishlist() {
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-wishlist')) {
            e.preventDefault();
            const productId = e.target.dataset.productId;
            const productName = e.target.dataset.productName;
            const productPrice = parseFloat(e.target.dataset.productPrice);
            const productImage = e.target.dataset.productImage;
            
            addToWishlist(productId, productName, productPrice, productImage);
        }
        
        if (e.target.classList.contains('remove-from-wishlist')) {
            const productId = e.target.dataset.productId;
            removeFromWishlist(productId);
        }
    });
}

function addToWishlist(productId, name, price, image) {
    const existingItem = wishlist.find(item => item.id === productId);
    
    if (!existingItem) {
        wishlist.push({
            id: productId,
            name: name,
            price: price,
            image: image
        });
        
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        updateWishlistUI();
        showToast('Product added to wishlist!', 'success');
    } else {
        showToast('Product already in wishlist!', 'warning');
    }
}

function removeFromWishlist(productId) {
    wishlist = wishlist.filter(item => item.id !== productId);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    updateWishlistUI();
    showToast('Product removed from wishlist!', 'success');
}

function updateWishlistUI() {
    const wishlistCount = document.getElementById('wishlist-count');
    const wishlistItems = document.getElementById('wishlist-items');
    
    if (wishlistCount) {
        wishlistCount.textContent = wishlist.length;
        wishlistCount.style.display = wishlist.length > 0 ? 'block' : 'none';
    }
    
    if (wishlistItems) {
        wishlistItems.innerHTML = '';
        
        if (wishlist.length === 0) {
            wishlistItems.innerHTML = '<p class="text-center text-gray-500 py-8">Your wishlist is empty</p>';
        } else {
            wishlist.forEach(item => {
                const wishlistItem = document.createElement('div');
                wishlistItem.className = 'cart-item';
                wishlistItem.innerHTML = `
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold">${item.name}</h3>
                        <p class="text-primary">$${item.price.toFixed(2)}</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="add-to-cart btn btn-primary btn-sm" data-product-id="${item.id}" data-product-name="${item.name}" data-product-price="${item.price}" data-product-image="${item.image}">
                            Add to Cart
                        </button>
                        <button class="remove-from-wishlist text-red-500 hover:text-red-700" data-product-id="${item.id}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                `;
                wishlistItems.appendChild(wishlistItem);
            });
        }
    }
}

// Search functionality
function setupSearch() {
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');
    
    if (searchInput) {
        let searchTimeout;
        
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 2) {
                if (searchResults) searchResults.innerHTML = '';
                return;
            }
            
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });
    }
}

function performSearch(query) {
    // This would typically make an AJAX request to the server
    // For now, we'll simulate with local data
    const searchResults = document.getElementById('search-results');
    
    if (searchResults) {
        searchResults.innerHTML = '<div class="p-4 text-center"><div class="spinner mx-auto"></div></div>';
        
        // Simulate API call
        setTimeout(() => {
            searchResults.innerHTML = `
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Search results for "${query}"</h3>
                    <p class="text-gray-600">No results found. Try a different search term.</p>
                </div>
            `;
        }, 1000);
    }
}

// Filter functionality
function setupFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const sortSelect = document.getElementById('sort-select');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            applyFilter(filter);
            
            // Update active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            applySort(this.value);
        });
    }
}

function applyFilter(filter) {
    const products = document.querySelectorAll('.product-card');
    
    products.forEach(product => {
        if (filter === 'all' || product.dataset.category === filter) {
            product.style.display = 'block';
            product.classList.add('fade-in');
        } else {
            product.style.display = 'none';
        }
    });
}

function applySort(sortBy) {
    const productGrid = document.querySelector('.product-grid');
    if (!productGrid) return;
    
    const products = Array.from(productGrid.children);
    
    products.sort((a, b) => {
        const priceA = parseFloat(a.dataset.price) || 0;
        const priceB = parseFloat(b.dataset.price) || 0;
        
        switch (sortBy) {
            case 'price-low':
                return priceA - priceB;
            case 'price-high':
                return priceB - priceA;
            case 'name':
                return a.dataset.name.localeCompare(b.dataset.name);
            default:
                return 0;
        }
    });
    
    products.forEach(product => productGrid.appendChild(product));
}

// Product gallery functionality
function setupProductGallery() {
    const mainImage = document.getElementById('main-product-image');
    const thumbnails = document.querySelectorAll('.product-thumbnail');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const newSrc = this.src;
            if (mainImage) {
                mainImage.src = newSrc;
                mainImage.classList.add('scale-in');
            }
            
            // Update active thumbnail
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Image zoom on hover
    if (mainImage) {
        mainImage.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        mainImage.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    }
}

// Quantity controls
function setupQuantityControls() {
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('quantity-btn')) {
            const input = e.target.parentElement.querySelector('input');
            const action = e.target.dataset.action;
            
            if (input) {
                let value = parseInt(input.value) || 1;
                
                if (action === 'increase') {
                    value += 1;
                } else if (action === 'decrease' && value > 1) {
                    value -= 1;
                }
                
                input.value = value;
            }
        }
    });
}

// Form validation
function setupFormValidation() {
    const forms = document.querySelectorAll('form[data-validate]');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!validateForm(this)) {
                e.preventDefault();
            }
        });
        
        // Real-time validation
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });
    });
}

function validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    const required = field.hasAttribute('required');
    
    let isValid = true;
    let message = '';
    
    if (required && !value) {
        isValid = false;
        message = 'This field is required';
    } else if (type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            message = 'Please enter a valid email address';
        }
    } else if (type === 'tel' && value) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        if (!phoneRegex.test(value.replace(/\s/g, ''))) {
            isValid = false;
            message = 'Please enter a valid phone number';
        }
    }
    
    // Update field appearance
    field.classList.remove('border-red-500', 'border-green-500');
    field.classList.add(isValid ? 'border-green-500' : 'border-red-500');
    
    // Show/hide error message
    let errorElement = field.parentElement.querySelector('.error-message');
    if (!errorElement && !isValid) {
        errorElement = document.createElement('div');
        errorElement.className = 'error-message text-red-500 text-sm mt-1';
        field.parentElement.appendChild(errorElement);
    }
    
    if (errorElement) {
        errorElement.textContent = message;
        errorElement.style.display = isValid ? 'none' : 'block';
    }
    
    return isValid;
}

// Animations
function setupAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);
    
    // Observe elements with animation classes
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
    
    // Stagger animations for product grids
    const productGrids = document.querySelectorAll('.product-grid');
    productGrids.forEach(grid => {
        const products = grid.querySelectorAll('.product-card');
        products.forEach((product, index) => {
            product.style.animationDelay = `${index * 0.1}s`;
        });
    });
}

// Toast notifications
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerHTML = `
        <div class="flex items-center gap-2">
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-gray-500 hover:text-gray-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Show toast
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            if (toast.parentElement) {
                toast.remove();
            }
        }, 300);
    }, 5000);
}

// Utility functions
function formatPrice(price) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    }).format(price);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Export functions for global use
window.SkyTale = {
    addToCart,
    removeFromCart,
    addToWishlist,
    removeFromWishlist,
    showToast,
    formatPrice
};
