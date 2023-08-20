<?php 
// Define admin routes using closure functions

/**
 * Admin Dashboard Route
 * Example URL: /admin/dashboard
 */
$router->addRoute('/admin/dashboard', function () {
    // Your logic to handle the admin dashboard
    require_once BASE_PATH . '/sh-admin/dashboard.php';
}, true); // Pass true as the third argument to indicate it's an admin route

/**
 * Admin Users Route
 * Example URL: /admin/users
 */
$router->addRoute('/admin/users', function () {
    // Your logic to handle the admin users page
    echo "Manage Users";
}, true); // Pass true as the third argument to indicate it's an admin route

// Add more admin routes as needed...
