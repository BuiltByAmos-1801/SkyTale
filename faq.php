<!-- Static FAQ Page - Frontend Only -->

<?php
// Static FAQ data grouped by category
$faqs_by_category = [
    'Orders' => [
        [
            'question' => 'How do I place an order?',
            'answer' => 'Browse products, add to cart, and proceed to checkout.'
        ],
        [
            'question' => 'Can I cancel my order?',
            'answer' => 'Contact support before your order ships.'
        ],
    ],
    'Shipping' => [
        [
            'question' => 'What shipping options are available?',
            'answer' => 'We offer standard and express shipping.'
        ],
        [
            'question' => 'How can I track my shipment?',
            'answer' => 'You will receive a tracking link via email.'
        ],
    ],
    'Returns' => [
        [
            'question' => 'What is your return policy?',
            'answer' => 'Returns are accepted within 30 days of delivery.'
        ],
        [
            'question' => 'How do I initiate a return?',
            'answer' => 'Contact our support team for instructions.'
        ],
    ],
    // Add more categories and questions as needed
];
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - SkyTale Electronics</title>
    <meta name="description" content="Find answers to frequently asked questions about SkyTale Electronics. Get help with orders, shipping, returns, and more.">
    
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
                <span class="text-gray-900 dark:text-white">FAQ</span>
            </nav>
        </div>
    </div>

    <!-- FAQ Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Find answers to common questions about our products, services, and policies. 
                Can't find what you're looking for? <a href="contact.php" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Contact us</a>.
            </p>
        </div>

        <!-- Search FAQ -->
        <div class="max-w-2xl mx-auto mb-12">
            <div class="relative">
                <input type="text" id="faq-search" placeholder="Search FAQ..." 
                       class="w-full px-4 py-3 pl-12 pr-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>

        <!-- FAQ Categories -->
        <div class="mb-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="faq-category-btn active px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold" data-category="all">
                    All Questions
                </button>
                <?php foreach (array_keys($faqs_by_category) as $category): ?>
                <button class="faq-category-btn px-6 py-3 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-gray-600" data-category="<?= htmlspecialchars($category) ?>">
                    <?= htmlspecialchars($category) ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- FAQ Items -->
        <div class="max-w-4xl mx-auto">
            <?php foreach ($faqs_by_category as $category => $category_faqs): ?>
            <div class="faq-category mb-8" data-category="<?= htmlspecialchars($category) ?>">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6"><?= htmlspecialchars($category) ?></h2>
                <div class="space-y-4">
                    <?php foreach ($category_faqs as $faq): ?>
                    <div class="faq-item bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($faq['question']) ?></span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform duration-200"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <div class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Contact Support -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
            <p class="text-xl opacity-90 mb-6 max-w-2xl mx-auto">
                Our support team is here to help you with any questions or concerns you may have.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="btn bg-white text-blue-600 hover:bg-gray-100 text-lg px-8 py-4">
                    <i class="fas fa-envelope mr-2"></i>Contact Support
                </a>
                <a href="tel:+15551234567" class="btn border-2 border-white text-white hover:bg-white hover:text-blue-600 text-lg px-8 py-4">
                    <i class="fas fa-phone mr-2"></i>Call Us
                </a>
            </div>
        </div>

        <!-- Popular Topics -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Popular Topics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shipping-fast text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Shipping & Delivery</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Learn about our shipping options, delivery times, and tracking your orders.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Shipping FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-undo text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Returns & Exchanges</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Everything you need to know about returning or exchanging your purchases.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Returns FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-credit-card text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Payment & Billing</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Information about payment methods, billing, and order processing.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Payment FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Warranty & Support</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Product warranties, technical support, and troubleshooting guides.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Warranty FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-user-plus text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Account & Orders</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Managing your account, tracking orders, and updating your information.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Account FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-lock text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Security & Privacy</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        How we protect your data and ensure secure transactions.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        View Security FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
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
        // FAQ page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            setupFAQAccordion();
            setupFAQSearch();
            setupFAQCategories();
        });

        function setupFAQAccordion() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    const faqItem = this.closest('.faq-item');
                    
                    // Close other open FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== this) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherIcon = otherQuestion.querySelector('i');
                            const otherFaqItem = otherQuestion.closest('.faq-item');
                            
                            otherAnswer.classList.add('hidden');
                            otherIcon.style.transform = 'rotate(0deg)';
                            otherFaqItem.classList.remove('border-blue-500');
                        }
                    });
                    
                    // Toggle current FAQ
                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                        faqItem.classList.add('border-blue-500');
                    } else {
                        answer.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                        faqItem.classList.remove('border-blue-500');
                    }
                });
            });
        }

        function setupFAQSearch() {
            const searchInput = document.getElementById('faq-search');
            const faqItems = document.querySelectorAll('.faq-item');
            
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    
                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                        
                        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            }
        }

        function setupFAQCategories() {
            const categoryButtons = document.querySelectorAll('.faq-category-btn');
            const faqCategories = document.querySelectorAll('.faq-category');
            
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.dataset.category;
                    
                    // Update button states
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-blue-600', 'text-white');
                        btn.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
                    });
                    this.classList.add('active', 'bg-blue-600', 'text-white');
                    this.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
                    
                    // Show/hide categories
                    faqCategories.forEach(categoryDiv => {
                        if (category === 'all' || categoryDiv.dataset.category === category) {
                            categoryDiv.style.display = 'block';
                        } else {
                            categoryDiv.style.display = 'none';
                        }
                    });
                });
            });
        }
    </script>
</body>
</html>
