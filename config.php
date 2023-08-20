<?php
// config.php


// Define the base URL of the project
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$subfolder = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', $protocol . '://' . $host . $subfolder);




// Define the path to the core directory
define('CORE_DIR', __DIR__ . '/core');

// Define the path to the route directory
define('ROUTE_DIR', CORE_DIR . '/route');

// Define the path to the SqueHub Default Router
define('DEFAULT_ROUTE', ROUTE_DIR . '/Default_Router.php');

// Define the path to the frontend network file
define('FRONTEND_ROUTER', ROUTE_DIR . '/frontend-router.php');

// Define the path to the backend network file
define('ADMIN_ROUTER', ROUTE_DIR . '/backend/admin-router.php');

// Define the path to the backend publisher file
define('PUBLISHER_ROUTER', ROUTE_DIR . '/backend/publisher-router.php');

// Define the path to the backend publisher file
define('ADVERTISER_ROUTER', ROUTE_DIR . '/backend/advertiser-router.php');

// Define the path to the helper directory
define('HELPERS_DIR', CORE_DIR . '/helpers');

//define sh  admin  dir
define('ADMIN_DIR', __DIR__ . '/admin');

//define sh admin assets dir
define('ASSETS_DIR', BASE_URL . 'assets/');

//define sh views dir
define('VIEWS_DIR', BASE_URL . 'views/');



// Database Configuration
define('DB_HOST', 'localhost');      // Your database host (e.g., localhost)
define('DB_USERNAME', 'root');       // Your database username
define('DB_PASSWORD', '');           // Your database password
define('DB_NAME', 'squehub');        // Your database name (e.g., squehub)

// Create a database connection using PDO
try {
    $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

    // Set PDO attributes for error handling (using exceptions)
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, you can set other PDO attributes (e.g., character set, etc.)

} catch (PDOException $e) {
    // Handle database connection errors
    echo "Database Connection Error: " . $e->getMessage();
    // You may log or display the error message in a more user-friendly way
    exit();
}



//require_once __DIR__ . '/sh-core/sh-helper/backend-helper.php';
