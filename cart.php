<?php
// Backend cart logic (no database integration)
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$cart = &$_SESSION['cart'];
$message = '';

// Handle add/remove actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $product_id = $_POST['product_id'] ?? '';
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;
    $product_qty = max(1, intval($_POST['product_qty'] ?? 1));

    if ($action === 'add') {
        // Add to cart (simulate)
        $cart[$product_id] = [
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'qty' => $product_qty
        ];
        $message = "$product_name added to cart.";
    } elseif ($action === 'remove' && isset($cart[$product_id])) {
        unset($cart[$product_id]);
        $message = "Product removed from cart.";
    } elseif ($action === 'update' && isset($cart[$product_id])) {
        $cart[$product_id]['qty'] = $product_qty;
        $message = "Cart updated.";
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - SkyTale Electronics</title>
    <meta name="description" content="Review your cart items and proceed to checkout at SkyTale Electronics. Secure shopping with easy checkout process.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <header class="header">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <a href="index.php" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold text-gradient">SkyTale</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                    <a href="products.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Products</a>
                    <a href="about.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">About</a>
                    <a href="blog.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Blog</a>
                    <a href="contact.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Contact</a>
                </nav>

                <!-- Search Bar -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" id="search-input" placeholder="Search products..." 
                               class="w-64 px-4 py-2 pl-10 pr-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <div id="search-results" class="absolute top-full left-0 right-0 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg mt-1 z-50 hidden"></div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center space-x-4">
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" class="theme-toggle"></button>
                    
                    <!-- Wishlist -->
                    <a href="wishlist.php" class="relative p-2 text-gray-700 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 transition-colors">
                        <i class="fas fa-heart text-xl"></i>
                        <span id="wishlist-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center hidden">0</span>
                    </a>
                    
                    <!-- Cart -->
                    <a href="cart.php" class="relative p-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span id="cart-count" class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center hidden">0</span>
                    </a>
                    
                    <!-- User Account -->
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            <i class="fas fa-user text-xl"></i>
                            <span class="hidden lg:block">Account</span>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg hidden">
                            <a href="login.php" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Login</a>
                            <a href="register.php" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Register</a>
                            <a href="profile.php" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                        </div>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <button id="mobile-menu-toggle" class="md:hidden p-2 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden border-t border-gray-200 dark:border-gray-700 py-4">
                <nav class="flex flex-col space-y-4">
                    <a href="index.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                    <a href="products.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Products</a>
                    <a href="about.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">About</a>
                    <a href="blog.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Blog</a>
                    <a href="contact.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="index.php" class="text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Home</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-900 dark:text-white">Shopping Cart</span>
            </nav>
        </div>
    </div>

    <!-- Cart Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Cart Items -->
            <div class="lg:w-2/3">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Shopping Cart</h1>
                        <span id="cart-item-count" class="text-gray-600 dark:text-gray-400">0 items</span>
                    </div>

                    <!-- Cart Items List -->
                    <div id="cart-items" class="space-y-4">
                        <!-- Cart items will be populated by JavaScript -->
                    </div>

                    <!-- Empty Cart Message -->
                    <div id="empty-cart" class="text-center py-12 hidden">
                        <i class="fas fa-shopping-cart text-6xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Your cart is empty</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Looks like you haven't added any items to your cart yet.</p>
                        <a href="products.php" class="btn btn-primary">
                            <i class="fas fa-shopping-bag mr-2"></i>Start Shopping
                        </a>
                    </div>
                </div>

                <!-- Continue Shopping -->
                <div class="mt-6">
                    <a href="products.php" class="inline-flex items-center text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                        <i class="fas fa-arrow-left mr-2"></i>Continue Shopping
                    </a>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:w-1/3">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 sticky top-24">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Order Summary</h2>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                            <span id="subtotal" class="font-semibold">$0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Shipping</span>
                            <span id="shipping" class="font-semibold">$0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Tax</span>
                            <span id="tax" class="font-semibold">$0.00</span>
                        </div>
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <div class="flex justify-between text-xl font-bold">
                                <span class="text-gray-900 dark:text-white">Total</span>
                                <span id="total" class="text-blue-600">$0.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Promo Code -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Promo Code</label>
                        <div class="flex gap-2">
                            <input type="text" id="promo-code" placeholder="Enter code" 
                                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <button id="apply-promo" class="btn btn-outline px-4 py-2">Apply</button>
                        </div>
                        <div id="promo-message" class="mt-2 text-sm hidden"></div>
                    </div>

                    <!-- Checkout Button -->
                    <button id="checkout-btn" class="w-full btn btn-primary text-lg py-4 mt-6" disabled>
                        <i class="fas fa-lock mr-2"></i>Proceed to Checkout
                    </button>

                    <!-- Security Badges -->
                    <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-center space-x-4 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                                <span>Secure Checkout</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-lock text-blue-500 mr-2"></i>
                                <span>SSL Encrypted</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed Products (removed sample products for clean code) -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">SkyTale</span>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted partner for premium electronics and mobile accessories.</p>
                    <div class="flex space-x-4">
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="about.php" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="faq.php" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="blog.php" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Returns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Warranty</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>123 Tech Street, Digital City</p>
                        <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@skytale.com</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SkyTale Electronics. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script>
        // Cart page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            updateCartDisplay();
            setupPromoCode();
            setupCheckout();
        });

        function updateCartDisplay() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItems = document.getElementById('cart-items');
            const emptyCart = document.getElementById('empty-cart');
            const cartItemCount = document.getElementById('cart-item-count');
            
            if (cart.length === 0) {
                cartItems.innerHTML = '';
                emptyCart.classList.remove('hidden');
                cartItemCount.textContent = '0 items';
                return;
            }
            
            emptyCart.classList.add('hidden');
            cartItemCount.textContent = `${cart.length} item${cart.length !== 1 ? 's' : ''}`;
            
            cartItems.innerHTML = '';
            cart.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="flex items-center space-x-4">
                        <div class="cart-item-image">
                            <img src="${item.image}" alt="${item.name}" class="w-20 h-20 object-cover rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">${item.name}</h3>
                            <p class="text-blue-600 font-semibold">$${item.price.toFixed(2)}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="quantity-btn px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700" data-product-id="${item.id}" data-action="decrease">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="px-3 py-1 min-w-[3rem] text-center">${item.quantity}</span>
                            <button class="quantity-btn px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700" data-product-id="${item.id}" data-action="increase">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">$${(item.price * item.quantity).toFixed(2)}</p>
                            <button class="remove-from-cart text-red-500 hover:text-red-700 text-sm" data-product-id="${item.id}">
                                <i class="fas fa-trash mr-1"></i>Remove
                            </button>
                        </div>
                    </div>
                `;
                cartItems.appendChild(cartItem);
            });
            
            updateOrderSummary();
        }

        function updateOrderSummary() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = subtotal >= 99 ? 0 : 9.99;
            const tax = subtotal * 0.08; // 8% tax
            const total = subtotal + shipping + tax;
            
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('shipping').textContent = shipping === 0 ? 'Free' : `$${shipping.toFixed(2)}`;
            document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
            
            const checkoutBtn = document.getElementById('checkout-btn');
            checkoutBtn.disabled = cart.length === 0;
        }

        function setupPromoCode() {
            const promoCodeInput = document.getElementById('promo-code');
            const applyPromoBtn = document.getElementById('apply-promo');
            const promoMessage = document.getElementById('promo-message');
            
            const validPromoCodes = {
                'SAVE10': 0.1,
                'WELCOME20': 0.2,
                'FREESHIP': 'freeship'
            };
            
            if (applyPromoBtn) {
                applyPromoBtn.addEventListener('click', function() {
                    const code = promoCodeInput.value.trim().toUpperCase();
                    
                    if (validPromoCodes[code]) {
                        promoMessage.textContent = 'Promo code applied successfully!';
                        promoMessage.className = 'mt-2 text-sm text-green-600';
                        promoMessage.classList.remove('hidden');
                        
                        // Apply discount logic here
                        applyPromoDiscount(code, validPromoCodes[code]);
                    } else {
                        promoMessage.textContent = 'Invalid promo code';
                        promoMessage.className = 'mt-2 text-sm text-red-600';
                        promoMessage.classList.remove('hidden');
                    }
                });
            }
        }

        function applyPromoDiscount(code, discount) {
            // This would apply the discount to the order
            console.log(`Applied promo code: ${code} with discount: ${discount}`);
        }

        function setupCheckout() {
            const checkoutBtn = document.getElementById('checkout-btn');
            
            if (checkoutBtn) {
                checkoutBtn.addEventListener('click', function() {
                    const cart = JSON.parse(localStorage.getItem('cart')) || [];
                    
                    if (cart.length === 0) {
                        alert('Your cart is empty!');
                        return;
                    }
                    
                    // Redirect to checkout page
                    window.location.href = 'checkout.php';
                });
            }
        }
    </script>
</body>
</html>
