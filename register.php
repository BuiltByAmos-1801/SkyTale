
<?php
// Backend registration logic (no database integration)
$error = "";
$success = "";
$first_name = $last_name = $username = $email = $phone = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize form data
    $first_name = trim($_POST['first_name'] ?? "");
    $last_name = trim($_POST['last_name'] ?? "");
    $username = trim($_POST['username'] ?? "");
    $email = trim($_POST['email'] ?? "");
    $phone = trim($_POST['phone'] ?? "");
    $password = $_POST['password'] ?? "";
    $confirm_password = $_POST['confirm_password'] ?? "";
    $terms = isset($_POST['terms']);

    // Basic validation
    if (!$first_name || !$last_name || !$username || !$email || !$password || !$confirm_password) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } elseif (!$terms) {
        $error = "You must agree to the Terms of Service and Privacy Policy.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long.";
    } else {
        // Simulate successful registration (no DB)
        $success = "Registration successful! (No database integration yet.)";
        // Optionally clear form fields
        $first_name = $last_name = $username = $email = $phone = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SkyTale Electronics</title>
    <meta name="description" content="Create your SkyTale Electronics account to access exclusive deals, track orders, and manage your wishlist.">
    
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

    <!-- Register Content -->
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <div class="mx-auto h-12 w-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                    <i class="fas fa-user-plus text-white text-xl"></i>
                </div>
                <h2 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Create your account</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Already have an account? <a href="login.php" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium">Sign in</a>
                </p>
            </div>

            <?php if (!isset($error)) $error = ""; ?>
            <?php if (!isset($success)) $success = ""; ?>
            <form class="mt-8 space-y-6" method="POST">
                <?php if ($error): ?>
                <div class="bg-red-100 dark:bg-red-900/30 border border-red-200 dark:border-red-800 text-red-800 dark:text-red-200 px-4 py-3 rounded-lg">
                    <?= htmlspecialchars($error) ?>
                </div>
                <?php endif; ?>

                <?php if ($success): ?>
                <div class="bg-green-100 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-green-800 dark:text-green-200 px-4 py-3 rounded-lg">
                    <?= htmlspecialchars($success) ?>
                </div>
                <?php endif; ?>

                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                First Name *
                            </label>
                            <input id="first_name" name="first_name" type="text" required 
                                   class="form-input" placeholder="First name"
                                   value="<?= htmlspecialchars($first_name ?? '') ?>">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Last Name *
                            </label>
                            <input id="last_name" name="last_name" type="text" required 
                                   class="form-input" placeholder="Last name"
                                   value="<?= htmlspecialchars($last_name ?? '') ?>">
                        </div>
                    </div>

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Username *
                        </label>
                        <input id="username" name="username" type="text" required 
                               class="form-input" placeholder="Choose a username"
                               value="<?= htmlspecialchars($username ?? '') ?>">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Email Address *
                        </label>
                        <input id="email" name="email" type="email" required 
                               class="form-input" placeholder="Enter your email"
                               value="<?= htmlspecialchars($email ?? '') ?>">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Phone Number
                        </label>
                        <input id="phone" name="phone" type="tel" 
                               class="form-input" placeholder="Enter your phone number"
                               value="<?= htmlspecialchars($phone ?? '') ?>">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Password *
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required 
                                   class="form-input pr-10" placeholder="Create a password">
                            <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-eye text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"></i>
                            </button>
                        </div>
                    </div>

                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Confirm Password *
                        </label>
                        <div class="relative">
                            <input id="confirm_password" name="confirm_password" type="password" required 
                                   class="form-input pr-10" placeholder="Confirm your password">
                            <button type="button" id="toggle-confirm-password" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-eye text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="terms" name="terms" type="checkbox" required 
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                        I agree to the <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Privacy Policy</a>
                    </label>
                </div>

                <div>
                    <button type="submit" class="w-full btn btn-primary text-lg py-3">
                        <i class="fas fa-user-plus mr-2"></i>Create Account
                    </button>
                </div>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-gray-50 dark:bg-gray-900 text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    </div>
                </div>
            </form>
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
        // Register page specific functionality
        document.addEventListener('DOMContentLoaded', function() {
            setupPasswordToggles();
        });

        function setupPasswordToggles() {
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm_password');
            const togglePasswordButton = document.getElementById('toggle-password');
            const toggleConfirmPasswordButton = document.getElementById('toggle-confirm-password');
            
            const passwordIcon = togglePasswordButton.querySelector('i');
            const confirmPasswordIcon = toggleConfirmPasswordButton.querySelector('i');
            
            togglePasswordButton.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('fa-eye');
                    passwordIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('fa-eye-slash');
                    passwordIcon.classList.add('fa-eye');
                }
            });
            
            toggleConfirmPasswordButton.addEventListener('click', function() {
                if (confirmPasswordInput.type === 'password') {
                    confirmPasswordInput.type = 'text';
                    confirmPasswordIcon.classList.remove('fa-eye');
                    confirmPasswordIcon.classList.add('fa-eye-slash');
                } else {
                    confirmPasswordInput.type = 'password';
                    confirmPasswordIcon.classList.remove('fa-eye-slash');
                    confirmPasswordIcon.classList.add('fa-eye');
                }
            });
        }
    </script>
</body>
</html>
