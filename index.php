<!-- Static Home Page - Frontend Only -->

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyTale Electronics - Premium Electronics & Mobile Accessories</title>
    <meta name="description" content="Discover the latest electronics, smartphones, laptops, and mobile accessories at SkyTale. Premium quality products with competitive prices and fast shipping.">
    <meta name="keywords" content="electronics, smartphones, laptops, mobile accessories, tablets, gaming, audio">
    
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container mx-auto px-4">
            <div class="hero-content text-center text-white">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-on-scroll">
                    Discover the <span class="text-yellow-300">Future</span> of Electronics
                </h1>
                <p class="text-xl md:text-2xl mb-8 opacity-90 animate-on-scroll">
                    Premium smartphones, laptops, accessories and more at unbeatable prices
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                    <a href="products.php" class="btn btn-primary text-lg px-8 py-4">
                        Shop Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#featured" class="btn btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-gray-900">
                        Explore Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Shop by Category</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Find exactly what you're looking for</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Modern, Animated, Blurry Categories -->
                <a href="products.php?category=mobiles" class="group">
                    <div class="relative rounded-2xl p-6 text-center overflow-hidden transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:-translate-y-2 backdrop-blur-lg bg-white/30 dark:bg-gray-800/30 border border-gray-200 dark:border-gray-700">
                        <div class="absolute inset-0 z-0 bg-gradient-to-br from-blue-400/40 via-purple-400/40 to-pink-400/40 blur-xl"></div>
                        <div class="relative z-10 w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                            <i class="fas fa-mobile-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="relative z-10 font-semibold text-gray-900 dark:text-white text-lg tracking-wide animate-fade-in">Mobiles</h3>
                    </div>
                </a>
                <a href="products.php?category=laptops" class="group">
                    <div class="relative rounded-2xl p-6 text-center overflow-hidden transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:-translate-y-2 backdrop-blur-lg bg-white/30 dark:bg-gray-800/30 border border-gray-200 dark:border-gray-700">
                        <div class="absolute inset-0 z-0 bg-gradient-to-br from-green-400/40 via-blue-400/40 to-purple-400/40 blur-xl"></div>
                        <div class="relative z-10 w-16 h-16 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                            <i class="fas fa-laptop text-white text-2xl"></i>
                        </div>
                        <h3 class="relative z-10 font-semibold text-gray-900 dark:text-white text-lg tracking-wide animate-fade-in">Laptops</h3>
                    </div>
                </a>
                <a href="products.php?category=audio" class="group">
                    <div class="relative rounded-2xl p-6 text-center overflow-hidden transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:-translate-y-2 backdrop-blur-lg bg-white/30 dark:bg-gray-800/30 border border-gray-200 dark:border-gray-700">
                        <div class="absolute inset-0 z-0 bg-gradient-to-br from-pink-400/40 via-purple-400/40 to-blue-400/40 blur-xl"></div>
                        <div class="relative z-10 w-16 h-16 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                            <i class="fas fa-headphones text-white text-2xl"></i>
                        </div>
                        <h3 class="relative z-10 font-semibold text-gray-900 dark:text-white text-lg tracking-wide animate-fade-in">Audio</h3>
                    </div>
                </a>
                <!-- Add more animated, blurry categories as needed -->
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="featured" class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured Products</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Handpicked premium electronics</p>
            </div>
            
            <div class="product-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Static Featured Products Example -->
                <div class="product-card animate-on-scroll" data-category="mobiles" data-price="499" data-name="iPhone 14 Pro">
                    <div class="product-image">
                        <div class="product-badge">Sale</div>
                        <img src="assets/images/iphone14pro.jpg" alt="iPhone 14 Pro" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">iPhone 14 Pro</h3>
                        <div class="product-price">
                            <span class="price-current">$999.00</span>
                            <span class="price-original">$1099.00</span>
                        </div>
                        <div class="flex gap-2">
                            <button class="add-to-cart btn btn-primary flex-1"><i class="fas fa-shopping-cart mr-2"></i>Add to Cart</button>
                            <button class="add-to-wishlist btn btn-outline"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-card animate-on-scroll" data-category="laptops" data-price="799" data-name="Dell XPS 13">
                    <div class="product-image">
                        <img src="assets/images/dellxps13.jpg" alt="Dell XPS 13" class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Dell XPS 13</h3>
                        <div class="product-price">
                            <span class="price-current">$799.00</span>
                        </div>
                        <div class="flex gap-2">
                            <button class="add-to-cart btn btn-primary flex-1"><i class="fas fa-shopping-cart mr-2"></i>Add to Cart</button>
                            <button class="add-to-wishlist btn btn-outline"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Add more static products as needed -->
            </div>
            
            <div class="text-center mt-12">
                <a href="products.php" class="btn btn-primary text-lg px-8 py-4">
                    View All Products <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Promotional Cards -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-8 text-white text-center">
                    <i class="fas fa-shipping-fast text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Free Shipping</h3>
                    <p class="opacity-90">On orders over $99</p>
                </div>
                <div class="bg-gradient-to-r from-green-500 to-blue-600 rounded-2xl p-8 text-white text-center">
                    <i class="fas fa-shield-alt text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Secure Payment</h3>
                    <p class="opacity-90">100% secure transactions</p>
                </div>
                <div class="bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl p-8 text-white text-center">
                    <i class="fas fa-headset text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">24/7 Support</h3>
                    <p class="opacity-90">Always here to help</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Stay Updated</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">Get the latest deals and product updates</p>
            
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800">
                <button type="submit" class="btn btn-primary px-6 py-3">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

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
                    <!-- Social media icons removed -->
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
</body>
</html>
