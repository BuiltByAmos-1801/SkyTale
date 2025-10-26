
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?php if (!isset($product) || !is_array($product)) $product = []; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name'] ?? '') ?> - SkyTale Electronics</title>
    <meta name="description" content="<?= htmlspecialchars($product['short_description'] ?? ($product['description'] ?? '')) ?>">
    <meta name="keywords" content="<?= htmlspecialchars(($product['name'] ?? '') . ', ' . ($product['brand'] ?? '') . ', electronics, mobile accessories') ?>">
    
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
                <a href="products.php" class="text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Products</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="products.php?category=<?= $product['category_slug'] ?? '' ?>" class="text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400"><?= htmlspecialchars($product['category_name'] ?? '') ?></a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-900 dark:text-white"><?= htmlspecialchars($product['name'] ?? '') ?></span>
            </nav>
        </div>
    </div>

    <!-- Product Details -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="aspect-square bg-white dark:bg-gray-800 rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <img id="main-product-image" 
                         src="<?= $images[0]['image_url'] ?? 'assets/images/placeholder.jpg' ?>" 
                         alt="<?= htmlspecialchars($product['name'] ?? '') ?>"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                
                <!-- Thumbnail Images -->
                <?php if (!isset($images) || !is_array($images)) $images = []; ?>
                <?php if (count($images) > 1): ?>
                <div class="grid grid-cols-4 gap-2">
                    <?php foreach ($images as $index => $image): ?>
                    <button class="product-thumbnail aspect-square bg-white dark:bg-gray-800 rounded-lg overflow-hidden border-2 <?= $index === 0 ? 'border-blue-500 active' : 'border-gray-200 dark:border-gray-700' ?> hover:border-blue-500 transition-colors">
                        <img src="<?= $image['image_url'] ?>" 
                             alt="<?= htmlspecialchars($product['name']) ?>"
                             class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Product Title & Brand -->
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-2"><?= htmlspecialchars($product['name'] ?? '') ?></h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400"><?= htmlspecialchars($product['brand'] ?? '') ?></p>
                </div>

                <!-- Price -->
                <div class="flex items-center space-x-4">
                    <?php if (!empty($product['sale_price'])): ?>
                    <span class="text-4xl font-bold text-blue-600">$<?= number_format($product['sale_price'] ?? 0, 2) ?></span>
                    <span class="text-2xl text-gray-500 line-through">$<?= number_format($product['price'] ?? 0, 2) ?></span>
                    <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Save $<?= number_format(($product['price'] ?? 0) - ($product['sale_price'] ?? 0), 2) ?>
                    </span>
                    <?php else: ?>
                    <span class="text-4xl font-bold text-blue-600">$<?= number_format($product['price'] ?? 0, 2) ?></span>
                    <?php endif; ?>
                </div>

                <!-- Stock Status -->
                <div class="flex items-center space-x-2">
                    <?php if (($product['stock_quantity'] ?? 0) > 0): ?>
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-green-600 dark:text-green-400 font-semibold">In Stock (<?= $product['stock_quantity'] ?? 0 ?> available)</span>
                    <?php else: ?>
                    <i class="fas fa-times-circle text-red-500"></i>
                    <span class="text-red-600 dark:text-red-400 font-semibold">Out of Stock</span>
                    <?php endif; ?>
                </div>

                <!-- Short Description -->
                <?php if (!empty($product['short_description'])): ?>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                    <p class="text-gray-700 dark:text-gray-300"><?= htmlspecialchars($product['short_description'] ?? '') ?></p>
                </div>
                <?php endif; ?>

                <!-- Quantity & Add to Cart -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <label class="text-lg font-semibold text-gray-900 dark:text-white">Quantity:</label>
                        <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-lg">
                            <button class="quantity-btn px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" data-action="decrease">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" id="quantity" value="1" min="1" max="<?= $product['stock_quantity'] ?? 0 ?>" 
                                   class="w-16 text-center border-0 focus:ring-0 bg-transparent">
                            <button class="quantity-btn px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" data-action="increase">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="add-to-cart btn btn-primary flex-1 text-lg py-4" 
                                data-product-id="<?= $product['id'] ?? '' ?>"
                                data-product-name="<?= htmlspecialchars($product['name'] ?? '') ?>"
                                data-product-price="<?= ($product['sale_price'] ?? ($product['price'] ?? '')) ?>"
                                data-product-image="<?= $images[0]['image_url'] ?? 'assets/images/placeholder.jpg' ?>"
                                <?= (($product['stock_quantity'] ?? 0) <= 0 ? 'disabled' : '') ?>>
                            <i class="fas fa-shopping-cart mr-2"></i>
                            <?= (($product['stock_quantity'] ?? 0) > 0 ? 'Add to Cart' : 'Out of Stock') ?>
                        </button>
                        <button class="add-to-wishlist btn btn-outline text-lg py-4" 
                                data-product-id="<?= $product['id'] ?? '' ?>"
                                data-product-name="<?= htmlspecialchars($product['name'] ?? '') ?>"
                                data-product-price="<?= ($product['sale_price'] ?? ($product['price'] ?? '')) ?>"
                                data-product-image="<?= $images[0]['image_url'] ?? 'assets/images/placeholder.jpg' ?>">
                            <i class="fas fa-heart mr-2"></i>Wishlist
                        </button>
                    </div>
                </div>

                <!-- Product Features -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <i class="fas fa-shipping-fast text-blue-500 text-xl"></i>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Free Shipping</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">On orders over $99</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <i class="fas fa-undo text-green-500 text-xl"></i>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">30-Day Returns</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Easy returns</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <i class="fas fa-shield-alt text-purple-500 text-xl"></i>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Warranty</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><?= htmlspecialchars($product['warranty'] ?? '1 Year') ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <i class="fas fa-headset text-orange-500 text-xl"></i>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Support</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">24/7 Help</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="mt-16">
            <div class="border-b border-gray-200 dark:border-gray-700">
                <nav class="flex space-x-8">
                    <button class="tab-btn py-4 px-1 border-b-2 border-blue-500 text-blue-600 font-semibold" data-tab="description">
                        Description
                    </button>
                    <button class="tab-btn py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300" data-tab="specifications">
                        Specifications
                    </button>
                    <button class="tab-btn py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300" data-tab="reviews">
                        Reviews
                    </button>
                </nav>
            </div>

            <div class="py-8">
                <!-- Description Tab -->
                <div id="description-tab" class="tab-content">
                    <div class="prose max-w-none">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            <?= nl2br(htmlspecialchars($product['description'] ?? '')) ?>
                        </p>
                    </div>
                </div>

                <!-- Specifications Tab -->
                <div id="specifications-tab" class="tab-content hidden">
                    <?php if (!empty($specifications)): ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php foreach ($specifications as $spec): ?>
                        <div class="flex justify-between py-3 border-b border-gray-200 dark:border-gray-700">
                            <span class="font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($spec['spec_name']) ?></span>
                            <span class="text-gray-600 dark:text-gray-400"><?= htmlspecialchars($spec['spec_value']) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                    <p class="text-gray-600 dark:text-gray-400">No specifications available for this product.</p>
                    <?php endif; ?>
                </div>

                <!-- Reviews Tab -->
                <div id="reviews-tab" class="tab-content hidden">
                    <div class="text-center py-12">
                        <i class="fas fa-comments text-6xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No Reviews Yet</h3>
                        <p class="text-gray-600 dark:text-gray-400">Be the first to review this product!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <?php if (!empty($related_products)): ?>
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Related Products</h2>
            <div class="product-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($related_products as $related): ?>
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <img src="<?= $related['image_url'] ?: 'assets/images/placeholder.jpg' ?>" 
                             alt="<?= htmlspecialchars($related['name']) ?>"
                             class="w-full h-64 object-cover">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><?= htmlspecialchars($related['name']) ?></h3>
                        <div class="product-price">
                            <?php if ($related['sale_price']): ?>
                            <span class="price-current">$<?= number_format($related['sale_price'], 2) ?></span>
                            <span class="price-original">$<?= number_format($related['price'], 2) ?></span>
                            <?php else: ?>
                            <span class="price-current">$<?= number_format($related['price'], 2) ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="product-details.php?id=<?= $related['id'] ?>" 
                               class="btn btn-outline flex-1 text-center">
                                <i class="fas fa-eye mr-2"></i>View
                            </a>
                            <button class="add-to-cart btn btn-primary" 
                                    data-product-id="<?= $related['id'] ?>"
                                    data-product-name="<?= htmlspecialchars($related['name']) ?>"
                                    data-product-price="<?= $related['sale_price'] ?: $related['price'] ?>"
                                    data-product-image="<?= $related['image_url'] ?: 'assets/images/placeholder.jpg' ?>">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
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
    <script>
        // Product details page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.dataset.tab;
                    
                    // Update button states
                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-blue-500', 'text-blue-600');
                        btn.classList.add('border-transparent', 'text-gray-500');
                    });
                    this.classList.remove('border-transparent', 'text-gray-500');
                    this.classList.add('border-blue-500', 'text-blue-600');
                    
                    // Update content
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    document.getElementById(targetTab + '-tab').classList.remove('hidden');
                });
            });
        });
    </script>
</body>
</html>
