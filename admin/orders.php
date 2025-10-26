
<?php
$orders = [
    [
        'order_number' => '1001',
        'customer' => 'Amit Sharma',
        'total' => 299.99,
        'status' => 'delivered',
    ],
    [
        'order_number' => '1002',
        'customer' => 'Sara Khan',
        'total' => 499.00,
        'status' => 'processing',
    ],
];
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Admin Orders</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <a href="orders.php" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-lg">
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
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Orders</h1>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Order #</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Customer</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white"><?= $order['order_number'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white"><?= htmlspecialchars($order['customer']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">$<?= number_format($order['total'], 2) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white"><?= ucfirst($order['status']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
