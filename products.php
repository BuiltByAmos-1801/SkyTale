
<?php
// Static Products Page - Frontend Only
$search = '';
$category = '';
$brand = '';
$min_price = '';
$max_price = '';
$sort = 'newest';
$total_products = 2;
$total_pages = 1;
$products = [
    [
        'id' => 1,
        'name' => 'iPhone 14 Pro',
        'price' => 1099.00,
        'sale_price' => 999.00,
        'image_url' => 'assets/images/iphone14pro.jpg',
        'category_id' => 'mobiles',
        'category_name' => 'Mobiles',
        'brand' => 'Apple',
    ],
    [
        'id' => 2,
        'name' => 'Dell XPS 13',
        'price' => 899.00,
        'sale_price' => 799.00,
        'image_url' => 'assets/images/dellxps13.jpg',
        'category_id' => 'laptops',
        'category_name' => 'Laptops',
        'brand' => 'Dell',
    ],
];
$categories = [
    ['slug' => 'mobiles', 'name' => 'Mobiles'],
    ['slug' => 'laptops', 'name' => 'Laptops'],
    ['slug' => 'audio', 'name' => 'Audio'],
];
$brands = [
    ['brand' => 'Apple'],
    ['brand' => 'Dell'],
    ['brand' => 'Sony'],
];
// Static brands for filter
// Already set above as $brands
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - SkyTale Electronics</title>
    <meta name="description" content="Browse our complete collection of electronics, smartphones, laptops, and mobile accessories. Filter by category, price, and brand to find exactly what you need.">
    
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
                    <a href="products.php" class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">Products</a>
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
                    <a href="products.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold">Products</a>
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
                <span class="text-gray-900 dark:text-white">Products</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 sticky top-24">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Filters</h3>
                    
                    <!-- Search -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Search</label>
                        <input type="text" id="search-filter" value="<?= htmlspecialchars($search) ?>" 
                               placeholder="Search products..." 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    </div>

                    <!-- Category Filter -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Category</label>
                        <select id="category-filter" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <option value="">All Categories</option>
                            <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['slug'] ?>" <?= $category === $cat['slug'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($cat['name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Brand</label>
                        <select id="brand-filter" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <option value="">All Brands</option>
                            <?php foreach ($brands as $brand_item): ?>
                            <option value="<?= htmlspecialchars($brand_item['brand']) ?>" <?= $brand === $brand_item['brand'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($brand_item['brand']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price Range</label>
               <div class="max-w-xs">
                <input type="number" id="min-price" value="<?= htmlspecialchars($min_price) ?>" 
                    placeholder="Min" min="0" step="0.01"
                    class="w-full px-3 py-2 mb-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                <br>
                <input type="number" id="max-price" value="<?= htmlspecialchars($max_price) ?>" 
                    placeholder="Max" min="0" step="0.01"
                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
               </div>
                    </div>

                    <!-- Apply Filters Button -->
                    <button id="apply-filters" class="w-full btn btn-primary">
                        <i class="fas fa-filter mr-2"></i>Apply Filters
                    </button>

                    <!-- Clear Filters -->
                    <button id="clear-filters" class="w-full btn btn-outline mt-2">
                        <i class="fas fa-times mr-2"></i>Clear All
                    </button>
                </div>
            </div>

            <!-- Products Section -->
            <!-- Products Page Content -->
<div class="container mx-auto px-4 py-8">
    <!-- Loop Categories -->
    
    <!-- 🎧 Earphones & Headphones -->
    <h2 class="text-2xl font-bold mb-4">🎧 Earphones & Headphones</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-8">
        <?php 
        $earphones = [
            ["Typc rockerz 625 handfree", 90, 140, "36% off"],
            ["Typc rockerz handfree", 90, 140, "36% off"],
            ["typc megnetic handfree", 90, 140, "36% off"],
            ["Typc Akg handfree", 75, 150, "50% off"],
            ["xento box handfree", 30, 50, "40% off"],
            ["leather wire handfree", 25, 35, "29% off"],
            ["headfone", 350, 600, "42% off"],
            ["headfone", 350, 500, "30% off"],
        ];
        foreach ($products as $product): ?>
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                <img src="<?= !empty($product['image_url']) ? htmlspecialchars($product['image_url']) : 'https://source.unsplash.com/400x400/?' . urlencode($product['name']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-40 object-cover rounded mb-2">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($product['name']) ?></h3>
                <p class="text-blue-600 font-bold">₹<?= htmlspecialchars($product['sale_price'] ?? $product['price']) ?></p>
                <?php if (!empty($product['sale_price'])): ?>
                    <p class="line-through text-gray-400">₹<?= htmlspecialchars($product['price']) ?></p>
                <?php endif; ?>
                <p class="text-green-600">In Stock: <?= htmlspecialchars($product['stock_quantity'] ?? 'N/A') ?></p>
                <form method="POST" class="mt-3">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <input type="hidden" name="product_name" value="<?= htmlspecialchars($product['name']) ?>">
                    <input type="hidden" name="product_price" value="<?= htmlspecialchars($product['sale_price'] ?? $product['price']) ?>">
                    <input type="hidden" name="product_qty" value="1">
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                    </button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 📱 Neckbands & Wireless Audio -->
    <h2 class="text-2xl font-bold mb-4">📱 Neckbands & Wireless Audio</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-8">
        <?php 
        $neckbands = [
            ["neckband", 150, 400, "63% off"],
            ["225 neckbabd", 110, 150, "27% off"],
            ["high quality neckbabd", 350, 500, "30% off"],
            ["sports neckband", 120, 350, "66% off"],
        ];
        foreach ($neckbands as $i => $p): ?>
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white"><?= $p[0] ?></h3>
                <p class="text-blue-600 font-bold">₹<?= $p[1] ?></p>
                <p class="line-through text-gray-400">₹<?= $p[2] ?></p>
                <p class="text-green-600"><?= $p[3] ?></p>
                <form method="POST" class="mt-3">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="product_id" value="neck<?= $i ?>">
                    <input type="hidden" name="product_name" value="<?= $p[0] ?>">
                    <input type="hidden" name="product_price" value="<?= $p[1] ?>">
                    <input type="hidden" name="product_qty" value="1">
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                    </button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    
    <!-- Similarly add for Speakers, Selfie Sticks, Smartwatches, Cables, Lights, Accessories, Packaging -->
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
        // Products page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const applyFiltersBtn = document.getElementById('apply-filters');
            const clearFiltersBtn = document.getElementById('clear-filters');
            const clearFiltersMainBtn = document.getElementById('clear-filters-main');
            
            if (applyFiltersBtn) {
                applyFiltersBtn.addEventListener('click', function() {
                    applyFilters();
                });
            }
            
            if (clearFiltersBtn) {
                clearFiltersBtn.addEventListener('click', function() {
                    clearFilters();
                });
            }
            
            if (clearFiltersMainBtn) {
                clearFiltersMainBtn.addEventListener('click', function() {
                    clearFilters();
                });
            }
            
            // Sort functionality
            const sortSelect = document.getElementById('sort-select');
            if (sortSelect) {
                sortSelect.addEventListener('change', function() {
                    applyFilters();
                });
            }
        });
        
        function applyFilters() {
            const search = document.getElementById('search-filter')?.value || '';
            const category = document.getElementById('category-filter')?.value || '';
            const brand = document.getElementById('brand-filter')?.value || '';
            const minPrice = document.getElementById('min-price')?.value || '';
            const maxPrice = document.getElementById('max-price')?.value || '';
            const sort = document.getElementById('sort-select')?.value || 'newest';
            
            const params = new URLSearchParams();
            if (search) params.set('search', search);
            if (category) params.set('category', category);
            if (brand) params.set('brand', brand);
            if (minPrice) params.set('min_price', minPrice);
            if (maxPrice) params.set('max_price', maxPrice);
            if (sort) params.set('sort', sort);
            
            window.location.href = 'products.php?' + params.toString();
        }
        
        function clearFilters() {
            window.location.href = 'products.php';
        }
    </script>
</body>
</html>
