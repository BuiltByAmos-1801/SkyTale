<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SkyTale Electronics</title>
    <meta name="description" content="Learn about SkyTale Electronics - your trusted partner for premium electronics and mobile accessories. Discover our story, mission, and dedicated team.">
    
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
                    <a href="about.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">About</a>
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
                    <a href="about.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">About</a>
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
                <span class="text-gray-900 dark:text-white">About Us</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">About SkyTale Electronics</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
                Your trusted partner for premium electronics and mobile accessories. 
                We're passionate about bringing you the latest technology with exceptional service.
            </p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Story</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">From humble beginnings to industry leaders</p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Founded in 2020</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            SkyTale Electronics was born from a simple vision: to make cutting-edge technology 
                            accessible to everyone. What started as a small online store has grown into one of 
                            the most trusted names in electronics retail.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Our founders, tech enthusiasts themselves, recognized the gap between high-quality 
                            electronics and affordable prices. They set out to bridge that gap, creating a 
                            platform where customers could find the latest gadgets without breaking the bank.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">50K+</div>
                                <div class="text-gray-600 dark:text-gray-400">Happy Customers</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">1000+</div>
                                <div class="text-gray-600 dark:text-gray-400">Products</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">24/7</div>
                                <div class="text-gray-600 dark:text-gray-400">Support</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-lg h-96 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-building text-6xl text-gray-400 mb-4"></i>
                            <p class="text-gray-600 dark:text-gray-400">Company headquarters image</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Mission & Vision</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">What drives us forward</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Mission</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        To democratize access to cutting-edge technology by providing premium electronics 
                        and mobile accessories at competitive prices, backed by exceptional customer service 
                        and support.
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Vision</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        To become the world's leading destination for electronics, where technology meets 
                        accessibility, and every customer finds exactly what they need to enhance their 
                        digital lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Values</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">The principles that guide everything we do</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Quality</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        We never compromise on quality. Every product we sell meets our strict standards.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Trust</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Building lasting relationships through transparency and honest business practices.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Innovation</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Embracing new technologies and constantly improving our services.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Customer First</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our customers are at the heart of everything we do. Their success is our success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">The passionate people behind SkyTale</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gray-200 dark:bg-gray-700 h-64 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-user text-6xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 dark:text-gray-400">CEO Photo</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Sarah Johnson</h3>
                        <p class="text-blue-600 font-semibold mb-3">Chief Executive Officer</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Visionary leader with 15+ years in tech retail. Passionate about making 
                            technology accessible to everyone.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-700">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-500">
                                <i class="fab fa-twitter"></i>
                
                    <div class="p-6">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-700">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gray-200 dark:bg-gray-700 h-64 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-user text-6xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 dark:text-gray-400">CMO Photo</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Emily Rodriguez</h3>
                        <p class="text-blue-600 font-semibold mb-3">Chief Marketing Officer</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Creative strategist who connects our brand with customers through 
                            innovative marketing campaigns.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-600 hover:text-blue-700">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-pink-600 hover:text-pink-700">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Why Choose SkyTale?</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">What sets us apart from the competition</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Fast Shipping</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Free shipping on orders over $99. Same-day processing for most items.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-undo text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Easy Returns</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        30-day return policy. No questions asked. We make returns simple.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">24/7 Support</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Round-the-clock customer support. We're here when you need us.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Secure Shopping</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        SSL encryption and secure payment processing. Your data is safe.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Quality Guarantee</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Only authentic products from authorized distributors. Quality assured.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-indigo-100 dark:bg-indigo-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tags text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Best Prices</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Competitive pricing with regular deals and discounts for our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Experience the Difference?</h2>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied customers who trust SkyTale for their electronics needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="products.php" class="btn bg-white text-blue-600 hover:bg-gray-100 text-lg px-8 py-4">
                    <i class="fas fa-shopping-bag mr-2"></i>Shop Now
                </a>
                <a href="contact.php" class="btn border-2 border-white text-white hover:bg-white hover:text-blue-600 text-lg px-8 py-4">
                    <i class="fas fa-envelope mr-2"></i>Contact Us
                </a>
            </div>
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
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
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
</body>
</html>
