<?php
$message = '';
$message_type = '';
?>
<!-- Static Contact Page - Frontend Only -->

<?php
// Static Contact Page - Frontend Only
$message = '';
$message_type = '';
$name = '';
$email = '';
$subject = '';
$message_text = '';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SkyTale Electronics</title>
    <meta name="description" content="Get in touch with SkyTale Electronics. Contact us for support, inquiries, or feedback. We're here to help with all your electronics needs.">
    
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
                    <a href="contact.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">Contact</a>
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
                    <a href="contact.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">Contact</a>
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
                <span class="text-gray-900 dark:text-white">Contact Us</span>
            </nav>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Contact Us</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Have a question or need help? We're here to assist you with all your electronics needs. 
                Get in touch with our friendly support team.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Contact Information -->
            <div class="lg:col-span-1 space-y-8">
                <!-- Contact Cards -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Get in Touch</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Address</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    123 Tech Street<br>
                                    Digital City, DC 12345<br>
                                    United States
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-phone text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    <a href="tel:+15551234567" class="hover:text-blue-600 dark:hover:text-blue-400">+1 (555) 123-4567</a><br>
                                    <span class="text-sm">Mon-Fri 9AM-6PM EST</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-envelope text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    <a href="mailto:info@skytale.com" class="hover:text-blue-600 dark:hover:text-blue-400">info@skytale.com</a><br>
                                    <a href="mailto:support@skytale.com" class="hover:text-blue-600 dark:hover:text-blue-400">support@skytale.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Business Hours</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 10:00 AM - 4:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send us a Message</h2>
                    
                    <?php if ($message): ?>
                    <div class="mb-6 p-4 rounded-lg <?= $message_type === 'success' ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-red-100 text-red-800 border border-red-200' ?>">
                        <?= $message ?>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="space-y-6" data-validate>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" value="<?= htmlspecialchars($name ?? '') ?>" required 
                                       class="form-input" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required 
                                       class="form-input" placeholder="Enter your email address">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Subject *</label>
                            <input type="text" name="subject" value="<?= htmlspecialchars($subject ?? '') ?>" required 
                                   class="form-input" placeholder="What is this about?">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Message *</label>
                            <textarea name="message" required class="form-input form-textarea" 
                                      placeholder="Tell us how we can help you..."><?= htmlspecialchars($message_text ?? '') ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary text-lg py-3 px-8">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-16">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">Find Us</h2>
                <div class="bg-gray-200 dark:bg-gray-700 rounded-lg h-96 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-map-marked-alt text-6xl text-gray-400 mb-4"></i>
                        <p class="text-gray-600 dark:text-gray-400">Interactive map would be embedded here</p>
                        <p class="text-sm text-gray-500 dark:text-gray-500 mt-2">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            123 Tech Street, Digital City, DC 12345
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 dark:text-gray-400">Quick answers to common questions</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What is your return policy?</h3>
                    <p class="text-gray-600 dark:text-gray-400">We offer a 30-day return policy for all products. Items must be in original condition with packaging.</p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">How long does shipping take?</h3>
                    <p class="text-gray-600 dark:text-gray-400">Standard shipping takes 3-5 business days. Express shipping takes 1-2 business days.</p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you offer international shipping?</h3>
                    <p class="text-gray-600 dark:text-gray-400">Yes, we ship to over 50 countries worldwide. International shipping takes 7-14 business days.</p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-600 dark:text-gray-400">We accept all major credit cards, PayPal, Apple Pay, and Google Pay.</p>
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
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
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
