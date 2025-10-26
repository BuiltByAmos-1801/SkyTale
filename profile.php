
<?php
if (!isset($user) || !is_array($user)) $user = [];
if (!isset($message)) $message = '';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - SkyTale Electronics</title>
    <meta name="description" content="Manage your SkyTale Electronics account, view orders, and update your profile information.">
    
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
                            <span class="hidden lg:block"><?= htmlspecialchars($user['first_name'] ?? '') ?></span>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg">
                            <a href="profile.php" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 font-semibold">Profile</a>
                            <a href="logout.php" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
                        </div>
                    </div>
                        <?php
                        // Backend profile logic (no database integration)
                        // Simulate a logged-in user
                        $user = [
                            'first_name' => 'John',
                            'last_name' => 'Doe',
                            'email' => 'john.doe@example.com',
                            'phone' => '1234567890',
                            'address' => '123 Tech Street',
                            'city' => 'Digital City',
                            'state' => 'Tech State',
                            'zip_code' => '12345',
                            'country' => 'Techland'
                        ];
                        $message = '';
                        $message_type = '';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Get and sanitize form data
                            $user['first_name'] = trim($_POST['first_name'] ?? $user['first_name']);
                            $user['last_name'] = trim($_POST['last_name'] ?? $user['last_name']);
                            $user['email'] = trim($_POST['email'] ?? $user['email']);
                            $user['phone'] = trim($_POST['phone'] ?? $user['phone']);
                            $user['address'] = trim($_POST['address'] ?? $user['address']);
                            $user['city'] = trim($_POST['city'] ?? $user['city']);
                            $user['state'] = trim($_POST['state'] ?? $user['state']);
                            $user['zip_code'] = trim($_POST['zip_code'] ?? $user['zip_code']);
                            $user['country'] = trim($_POST['country'] ?? $user['country']);

                            // Basic validation
                            if (!$user['first_name'] || !$user['last_name'] || !$user['email']) {
                                $message = 'Please fill in all required fields.';
                                $message_type = 'error';
                            } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
                                $message = 'Please enter a valid email address.';
                                $message_type = 'error';
                            } else {
                                $message = 'Profile updated successfully! (No database integration yet.)';
                                $message_type = 'success';
                            }
                        }
                        ?>
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
                <span class="text-gray-900 dark:text-white">Profile</span>
            </nav>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Profile Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 sticky top-24">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white"><?= htmlspecialchars(($user['first_name'] ?? '') . ' ' . ($user['last_name'] ?? '')) ?></h2>
                        <p class="text-gray-600 dark:text-gray-400"><?= htmlspecialchars($user['email'] ?? '') ?></p>
                    </div>
                    
                    <nav class="space-y-2">
                        <a href="#profile" class="profile-nav-link block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg active">
                            <i class="fas fa-user mr-3"></i>Profile Information
                        </a>
                        <a href="#orders" class="profile-nav-link block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <i class="fas fa-shopping-bag mr-3"></i>Order History
                        </a>
                        <a href="#addresses" class="profile-nav-link block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <i class="fas fa-map-marker-alt mr-3"></i>Addresses
                        </a>
                        <a href="#security" class="profile-nav-link block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <i class="fas fa-shield-alt mr-3"></i>Security
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="lg:col-span-2">
                <!-- Profile Information -->
                <div id="profile-section" class="profile-section">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Profile Information</h3>
                        
                        <?php if ($message): ?>
                        <div class="mb-6 p-4 rounded-lg <?= $message_type === 'success' ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-red-100 text-red-800 border border-red-200' ?>">
                            <?= htmlspecialchars($message) ?>
                        </div>
                        <?php endif; ?>
                        
                        <form method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" name="first_name" required 
                                           class="form-input" value="<?= htmlspecialchars($user['first_name'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" name="last_name" required 
                                           class="form-input" value="<?= htmlspecialchars($user['last_name'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                    <input type="email" name="email" required 
                        class="form-input" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                    <input type="tel" name="phone" 
                        class="form-input" value="<?= htmlspecialchars($user['phone'] ?? '') ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Address</label>
                    <input type="text" name="address" 
                        class="form-input" value="<?= htmlspecialchars($user['address'] ?? '') ?>">
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                     <input type="text" name="city" 
                         class="form-input" value="<?= htmlspecialchars($user['city'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">State</label>
                     <input type="text" name="state" 
                         class="form-input" value="<?= htmlspecialchars($user['state'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ZIP Code</label>
                     <input type="text" name="zip_code" 
                         class="form-input" value="<?= htmlspecialchars($user['zip_code'] ?? '') ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Country</label>
                    <input type="text" name="country" 
                        class="form-input" value="<?= htmlspecialchars($user['country'] ?? '') ?>">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-2"></i>Update Profile
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Order History -->
                <div id="orders-section" class="profile-section hidden">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Order History</h3>
                        
                        <?php if (empty($orders)): ?>
                        <div class="text-center py-12">
                            <i class="fas fa-shopping-bag text-6xl text-gray-400 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No orders yet</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Start shopping to see your orders here</p>
                            <a href="products.php" class="btn btn-primary">
                                <i class="fas fa-shopping-bag mr-2"></i>Start Shopping
                            </a>
                        </div>
                        <?php else: ?>
                        <div class="space-y-4">
                            <?php foreach ($orders as $order): ?>
                            <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Order #<?= htmlspecialchars($order['order_number']) ?></h4>
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold 
                                        <?= $order['status'] === 'delivered' ? 'bg-green-100 text-green-800' : 
                                           ($order['status'] === 'shipped' ? 'bg-blue-100 text-blue-800' : 
                                           ($order['status'] === 'processing' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800')) ?>">
                                        <?= ucfirst($order['status']) ?>
                                    </span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">
                                    Placed on <?= date('M j, Y', strtotime($order['created_at'])) ?>
                                </p>
                                <p class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Total: $<?= number_format($order['total'], 2) ?>
                                </p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Addresses -->
                <div id="addresses-section" class="profile-section hidden">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Saved Addresses</h3>
                        <div class="text-center py-12">
                            <i class="fas fa-map-marker-alt text-6xl text-gray-400 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No saved addresses</h4>
                            <p class="text-gray-600 dark:text-gray-400">Add addresses for faster checkout</p>
                        </div>
                    </div>
                </div>

                <!-- Security -->
                <div id="security-section" class="profile-section hidden">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Security Settings</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Change Password</h4>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Update your password to keep your account secure</p>
                                <button class="btn btn-outline">
                                    <i class="fas fa-key mr-2"></i>Change Password
                                </button>
                            </div>
                            
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Two-Factor Authentication</h4>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Add an extra layer of security to your account</p>
                                <button class="btn btn-outline">
                                    <i class="fas fa-shield-alt mr-2"></i>Enable 2FA
                                </button>
                            </div>
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
        // Profile page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            setupProfileNavigation();
        });

        function setupProfileNavigation() {
            const navLinks = document.querySelectorAll('.profile-nav-link');
            const sections = document.querySelectorAll('.profile-section');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    navLinks.forEach(navLink => {
                        navLink.classList.remove('active', 'bg-blue-100', 'text-blue-600');
                        navLink.classList.add('text-gray-700', 'dark:text-gray-300');
                    });
                    
                    // Add active class to clicked link
                    this.classList.add('active', 'bg-blue-100', 'text-blue-600');
                    this.classList.remove('text-gray-700', 'dark:text-gray-300');
                    
                    // Hide all sections
                    sections.forEach(section => {
                        section.classList.add('hidden');
                    });
                    
                    // Show target section
                    const targetId = this.getAttribute('href').substring(1) + '-section';
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.classList.remove('hidden');
                    }
                });
            });
        }
    </script>
</body>
</html>
