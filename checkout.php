<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - SkyTale Electronics</title>
    <meta name="description" content="Complete your purchase securely at SkyTale Electronics. Fast, secure checkout with multiple payment options.">
    
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
                <a href="cart.php" class="text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400">Cart</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-900 dark:text-white">Checkout</span>
            </nav>
        </div>
    </div>

    <!-- Checkout Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Checkout Steps -->
        <div class="mb-8">
            <div class="flex items-center justify-center space-x-8">
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-semibold">1</div>
                    <span class="ml-2 text-blue-600 font-semibold">Cart</span>
                </div>
                <div class="w-16 h-0.5 bg-blue-500"></div>
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-semibold">2</div>
                    <span class="ml-2 text-blue-600 font-semibold">Checkout</span>
                </div>
                <div class="w-16 h-0.5 bg-gray-300"></div>
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-semibold">3</div>
                    <span class="ml-2 text-gray-500">Confirmation</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Checkout Form -->
            <div class="lg:col-span-2">
                <form id="checkout-form" class="space-y-8">
                    <!-- Billing Information -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Billing Information</h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label class="form-label">First Name *</label>
                                <input type="text" name="first_name" required class="form-input" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name *</label>
                                <input type="text" name="last_name" required class="form-input" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" required class="form-input" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" required class="form-input" placeholder="Enter your phone number">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Address *</label>
                            <input type="text" name="address" required class="form-input" placeholder="Enter your street address">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="form-group">
                                <label class="form-label">City *</label>
                                <input type="text" name="city" required class="form-input" placeholder="Enter your city">
                            </div>
                            <div class="form-group">
                                <label class="form-label">State *</label>
                                <select name="state" required class="form-input">
                                    <option value="">Select State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">ZIP Code *</label>
                                <input type="text" name="zip_code" required class="form-input" placeholder="Enter ZIP code">
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Payment Information</h2>
                        
                        <!-- Payment Methods -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-4">Payment Method</label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label class="payment-method relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="credit_card" class="sr-only" checked>
                                    <div class="border-2 border-gray-300 dark:border-gray-600 rounded-lg p-4 text-center hover:border-blue-500 transition-colors">
                                        <i class="fas fa-credit-card text-2xl mb-2"></i>
                                        <p class="font-semibold">Credit Card</p>
                                    </div>
                                </label>
                                <label class="payment-method relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="paypal" class="sr-only">
                                    <div class="border-2 border-gray-300 dark:border-gray-600 rounded-lg p-4 text-center hover:border-blue-500 transition-colors">
                                        <i class="fab fa-paypal text-2xl mb-2"></i>
                                        <p class="font-semibold">PayPal</p>
                                    </div>
                                </label>
                                <label class="payment-method relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="apple_pay" class="sr-only">
                                    <div class="border-2 border-gray-300 dark:border-gray-600 rounded-lg p-4 text-center hover:border-blue-500 transition-colors">
                                        <i class="fab fa-apple-pay text-2xl mb-2"></i>
                                        <p class="font-semibold">Apple Pay</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Credit Card Form -->
                        <div id="credit-card-form" class="space-y-4">
                            <div class="form-group">
                                <label class="form-label">Card Number *</label>
                                <input type="text" name="card_number" class="form-input" placeholder="1234 5678 9012 3456" maxlength="19">
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="form-group">
                                    <label class="form-label">Expiry Month *</label>
                                    <select name="expiry_month" class="form-input">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Expiry Year *</label>
                                    <select name="expiry_year" class="form-input">
                                        <option value="">Year</option>
                                        <?php for ($year = date('Y'); $year <= date('Y') + 10; $year++): ?>
                                        <option value="<?= $year ?>"><?= $year ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">CVV *</label>
                                    <input type="text" name="cvv" class="form-input" placeholder="123" maxlength="4">
                                </div>
                            </div>
                        </div>

                        <!-- PayPal Form -->
                        <div id="paypal-form" class="hidden">
                            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                                <p class="text-blue-800 dark:text-blue-200">You will be redirected to PayPal to complete your payment.</p>
                            </div>
                        </div>

                        <!-- Apple Pay Form -->
                        <div id="apple-pay-form" class="hidden">
                            <div class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg p-4">
                                <p class="text-gray-700 dark:text-gray-300">Apple Pay will be processed securely through your device.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Order Notes (Optional)</h2>
                        <div class="form-group">
                            <label class="form-label">Special Instructions</label>
                            <textarea name="notes" class="form-input form-textarea" placeholder="Any special instructions for your order..."></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 sticky top-24">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Order Summary</h2>
                    
                    <!-- Order Items -->
                    <div id="order-items" class="space-y-4 mb-6">
                        <!-- Items will be populated by JavaScript -->
                    </div>
                    
                    <!-- Order Totals -->
                    <div class="space-y-3 border-t border-gray-200 dark:border-gray-700 pt-4">
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
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-3">
                            <div class="flex justify-between text-xl font-bold">
                                <span class="text-gray-900 dark:text-white">Total</span>
                                <span id="total" class="text-blue-600">$0.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Place Order Button -->
                    <button id="place-order-btn" class="w-full btn btn-primary text-lg py-4 mt-6" disabled>
                        <i class="fas fa-lock mr-2"></i>Place Order
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
        // Checkout page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            updateOrderSummary();
            setupPaymentMethods();
            setupFormValidation();
            setupPlaceOrder();
        });

        function updateOrderSummary() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const orderItems = document.getElementById('order-items');
            
            if (cart.length === 0) {
                window.location.href = 'cart.php';
                return;
            }
            
            orderItems.innerHTML = '';
            cart.forEach(item => {
                const orderItem = document.createElement('div');
                orderItem.className = 'flex items-center space-x-3';
                orderItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover rounded">
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-900 dark:text-white">${item.name}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Qty: ${item.quantity}</p>
                    </div>
                    <span class="font-semibold text-gray-900 dark:text-white">$${(item.price * item.quantity).toFixed(2)}</span>
                `;
                orderItems.appendChild(orderItem);
            });
            
            // Calculate totals
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = subtotal >= 99 ? 0 : 9.99;
            const tax = subtotal * 0.08; // 8% tax
            const total = subtotal + shipping + tax;
            
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('shipping').textContent = shipping === 0 ? 'Free' : `$${shipping.toFixed(2)}`;
            document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }

        function setupPaymentMethods() {
            const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
            const creditCardForm = document.getElementById('credit-card-form');
            const paypalForm = document.getElementById('paypal-form');
            const applePayForm = document.getElementById('apple-pay-form');
            
            paymentMethods.forEach(method => {
                method.addEventListener('change', function() {
                    // Hide all forms
                    creditCardForm.classList.add('hidden');
                    paypalForm.classList.add('hidden');
                    applePayForm.classList.add('hidden');
                    
                    // Show selected form
                    if (this.value === 'credit_card') {
                        creditCardForm.classList.remove('hidden');
                    } else if (this.value === 'paypal') {
                        paypalForm.classList.remove('hidden');
                    } else if (this.value === 'apple_pay') {
                        applePayForm.classList.remove('hidden');
                    }
                });
            });
        }

        function setupFormValidation() {
            const form = document.getElementById('checkout-form');
            const placeOrderBtn = document.getElementById('place-order-btn');
            
            form.addEventListener('input', function() {
                const requiredFields = form.querySelectorAll('input[required], select[required]');
                let allValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        allValid = false;
                    }
                });
                
                // Check payment method specific fields
                const selectedPayment = document.querySelector('input[name="payment_method"]:checked');
                if (selectedPayment && selectedPayment.value === 'credit_card') {
                    const cardNumber = document.querySelector('input[name="card_number"]');
                    const expiryMonth = document.querySelector('select[name="expiry_month"]');
                    const expiryYear = document.querySelector('select[name="expiry_year"]');
                    const cvv = document.querySelector('input[name="cvv"]');
                    
                    if (!cardNumber.value.trim() || !expiryMonth.value || !expiryYear.value || !cvv.value.trim()) {
                        allValid = false;
                    }
                }
                
                placeOrderBtn.disabled = !allValid;
            });
        }

        function setupPlaceOrder() {
            const placeOrderBtn = document.getElementById('place-order-btn');
            
            placeOrderBtn.addEventListener('click', function() {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                if (cart.length === 0) {
                    alert('Your cart is empty!');
                    return;
                }
                
                // Show loading state
                this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
                this.disabled = true;
                
                // Simulate order processing
                setTimeout(() => {
                    // Clear cart
                    localStorage.removeItem('cart');
                    
                    // Redirect to success page
                    window.location.href = 'order-success.php';
                }, 2000);
            });
        }
    </script>
</body>
</html>
