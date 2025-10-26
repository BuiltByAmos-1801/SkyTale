
<?php
$_SESSION['username'] = 'Admin'; // Static username
$stats = [
    'users' => 10,
    'products' => 25,
    'orders' => 5,
    'revenue' => 12000.50
];
$recent_orders = [
    [
        'order_number' => '1001',
        'first_name' => 'Amit',
        'last_name' => 'Sharma',
        'total' => 299.99,
        'status' => 'delivered'
    ],
    // Add more orders as needed
];
$recent_messages = [
    [
        'name' => 'Sara Khan',
        'created_at' => '2025-09-28',
        'subject' => 'Order Inquiry'
    ],
    // Add more messages as needed
];
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SkyTale Electronics</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="../index.php" class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gradient">SkyTale Admin</span>
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="theme-toggle"></button>
                    <a href="../index.php" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <i class="fas fa-external-link-alt mr-2"></i>View Site
                    </a>
                    <a href="../logout.php" class="text-red-600 hover:text-red-700">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white dark:bg-gray-800 shadow-sm min-h-screen">
            <nav class="mt-8">
                <div class="px-4 space-y-2">
                    <a href="index.php" class="flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
                        <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
                    </a>
                    <a href="products.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-box mr-3"></i>Products
                    </a>
                    <a href="orders.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-shopping-bag mr-3"></i>Orders
                    </a>
                    <a href="users.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-users mr-3"></i>Users
                    </a>
                    <a href="messages.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-envelope mr-3"></i>Messages
                    </a>
                    <a href="blog.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-blog mr-3"></i>Blog Posts
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
                <p class="text-gray-600 dark:text-gray-400">Welcome back, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Users</p>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white"><?= number_format($stats['users']) ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30">
                            <i class="fas fa-box text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Products</p>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white"><?= number_format($stats['products']) ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900/30">
                            <i class="fas fa-shopping-bag text-yellow-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Orders</p>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white"><?= number_format($stats['orders']) ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900/30">
                            <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Revenue</p>
                            <p class="text-2xl font-semibold text-gray-900 dark:text-white">$<?= number_format($stats['revenue'], 2) ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Recent Orders -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Orders</h3>
                    </div>
                    <div class="p-6">
                        <?php if (empty($recent_orders)): ?>
                        <p class="text-gray-500 dark:text-gray-400 text-center py-4">No orders yet</p>
                        <?php else: ?>
                        <div class="space-y-4">
                            <?php foreach ($recent_orders as $order): ?>
                            <div class="flex items-center justify-between py-3 border-b border-gray-200 dark:border-gray-700 last:border-b-0">
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">#<?= htmlspecialchars($order['order_number']) ?></p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <?= htmlspecialchars($order['first_name'] . ' ' . $order['last_name']) ?>
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="font-semibold text-gray-900 dark:text-white">$<?= number_format($order['total'], 2) ?></p>
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                        <?= $order['status'] === 'delivered' ? 'bg-green-100 text-green-800' : 
                                           ($order['status'] === 'shipped' ? 'bg-blue-100 text-blue-800' : 
                                           ($order['status'] === 'processing' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800')) ?>">
                                        <?= ucfirst($order['status']) ?>
                                    </span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Recent Messages -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Messages</h3>
                    </div>
                    <div class="p-6">
                        <?php if (empty($recent_messages)): ?>
                        <p class="text-gray-500 dark:text-gray-400 text-center py-4">No messages yet</p>
                        <?php else: ?>
                        <div class="space-y-4">
                            <?php foreach ($recent_messages as $message): ?>
                            <div class="py-3 border-b border-gray-200 dark:border-gray-700 last:border-b-0">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="font-medium text-gray-900 dark:text-white"><?= htmlspecialchars($message['name']) ?></p>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">
                                        <?= date('M j, Y', strtotime($message['created_at'])) ?>
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><?= htmlspecialchars($message['subject']) ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../assets/js/main.js"></script>
</body>
</html>
