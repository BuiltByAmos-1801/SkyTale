<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - SkyTale Electronics</title>
    <meta name="description" content="View your saved favorite products at SkyTale Electronics. Keep track of items you want to buy later.">
    
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
                <span class="text-gray-900 dark:text-white">Wishlist</span>
            </nav>
        </div>
    </div>

    <!-- Wishlist Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">My Wishlist</h1>
                <p class="text-gray-600 dark:text-gray-400">Save your favorite products for later</p>
            </div>
            <div class="flex items-center space-x-4">
                <button id="clear-wishlist" class="btn btn-outline">
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <a href="products.php" class="btn btn-primary">
                    <i class="fas fa-shopping-bag mr-2"></i>Continue Shopping
                </a>
            </div>
        </div>

        <!-- Wishlist Items -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
            <div id="wishlist-items" class="divide-y divide-gray-200 dark:divide-gray-700">
                <!-- Wishlist items will be populated by JavaScript -->
            </div>

            <!-- Empty Wishlist Message -->
            <div id="empty-wishlist" class="text-center py-16 hidden">
                <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Your wishlist is empty</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-md mx-auto">
                    Start adding products to your wishlist by clicking the heart icon on any product page.
                </p>
                <a href="products.php" class="btn btn-primary text-lg px-8 py-4">
                    <i class="fas fa-shopping-bag mr-2"></i>Start Shopping
                </a>
            </div>
        </div>

        <!-- Recently Viewed Products -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">You Might Also Like</h2>
            <div class="product-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Sample products for demonstration -->
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <img src="assets/images/placeholder.jpg" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Wireless Headphones</h3>
                        <div class="product-price">
                            <span class="price-current">$99.99</span>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="btn btn-outline flex-1 text-center">View Details</a>
                            <button class="add-to-cart btn btn-primary" data-product-id="1" data-product-name="Wireless Headphones" data-product-price="99.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button class="add-to-wishlist btn btn-outline" data-product-id="1" data-product-name="Wireless Headphones" data-product-price="99.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <img src="assets/images/placeholder.jpg" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Smart Watch</h3>
                        <div class="product-price">
                            <span class="price-current">$199.99</span>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="btn btn-outline flex-1 text-center">View Details</a>
                            <button class="add-to-cart btn btn-primary" data-product-id="2" data-product-name="Smart Watch" data-product-price="199.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button class="add-to-wishlist btn btn-outline" data-product-id="2" data-product-name="Smart Watch" data-product-price="199.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <img src="assets/images/placeholder.jpg" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Phone Case</h3>
                        <div class="product-price">
                            <span class="price-current">$29.99</span>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="btn btn-outline flex-1 text-center">View Details</a>
                            <button class="add-to-cart btn btn-primary" data-product-id="3" data-product-name="Phone Case" data-product-price="29.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button class="add-to-wishlist btn btn-outline" data-product-id="3" data-product-name="Phone Case" data-product-price="29.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <img src="assets/images/placeholder.jpg" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">USB Cable</h3>
                        <div class="product-price">
                            <span class="price-current">$19.99</span>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="btn btn-outline flex-1 text-center">View Details</a>
                            <button class="add-to-cart btn btn-primary" data-product-id="4" data-product-name="USB Cable" data-product-price="19.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button class="add-to-wishlist btn btn-outline" data-product-id="4" data-product-name="USB Cable" data-product-price="19.99" data-product-image="assets/images/placeholder.jpg">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <a href="about.php" class="text-gray-400 hover:text-white transition-colors">About Us</a>
                            <a href="contact.php" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                            <a href="faq.php" class="text-gray-400 hover:text-white transition-colors">FAQ</a>
                            <a href="blog.php" class="text-gray-400 hover:text-white transition-colors">Blog</a>
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
        // Wishlist page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            updateWishlistDisplay();
            setupClearWishlist();
        });

        function updateWishlistDisplay() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const wishlistItems = document.getElementById('wishlist-items');
            const emptyWishlist = document.getElementById('empty-wishlist');
            
            if (wishlist.length === 0) {
                wishlistItems.innerHTML = '';
                emptyWishlist.classList.remove('hidden');
                return;
            }
            
            emptyWishlist.classList.add('hidden');
            wishlistItems.innerHTML = '';
            
            wishlist.forEach(item => {
                const wishlistItem = document.createElement('div');
                wishlistItem.className = 'p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors';
                wishlistItem.innerHTML = `
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-200 dark:bg-gray-600 rounded-lg overflow-hidden">
                            <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">${item.name}</h3>
                            <p class="text-blue-600 font-semibold">$${item.price.toFixed(2)}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="add-to-cart btn btn-primary" 
                                    data-product-id="${item.id}"
                                    data-product-name="${item.name}"
                                    data-product-price="${item.price}"
                                    data-product-image="${item.image}">
                                <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
                            </button>
                            <button class="remove-from-wishlist text-red-500 hover:text-red-700 p-2" 
                                    data-product-id="${item.id}">
                                <i class="fas fa-heart-broken text-xl"></i>
                            </button>
                        </div>
                    </div>
                `;
                wishlistItems.appendChild(wishlistItem);
            });
        }

        function setupClearWishlist() {
            const clearWishlistBtn = document.getElementById('clear-wishlist');
            
            if (clearWishlistBtn) {
                clearWishlistBtn.addEventListener('click', function() {
                    if (confirm('Are you sure you want to clear your wishlist?')) {
                        localStorage.removeItem('wishlist');
                        updateWishlistDisplay();
                        updateWishlistUI();
                        showToast('Wishlist cleared!', 'success');
                    }
                });
            }
        }
    </script>
</body>
</html>
