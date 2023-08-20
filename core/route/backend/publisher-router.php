<?php
// core/route/backend/publisher-route.php
// Define publisher routes using closure functions

/**
 * Publisher Dashboard Route
 * Example URL: /publisher/dashboard
 */
$router->addRoute('/publisher/dashboard', function () {
    // Your logic to handle the publisher dashboard
    echo 'Publisher Dashboard';
}, true); // Pass true as the third argument to indicate it's a publisher route


$router->addRoute('/publisher/yes', function () {
    // Check if the user is logged in as a publisher
    if ($_SESSION['user_type'] === 'Publisher') {
        // Query the database for data related to the publisher's dashboard
        // Perform necessary logic here...

        // Example: Display a welcome message and some dynamic content
        echo 'Welcome, Publisher!';
        echo '<p>Here is your yes content...</p>';
    } else {
        // Redirect to the login page or show an error message
        header("Location: /login");
        exit();
    }
}, true); // Pass true as the third argument to indicate it's a publisher route



/**
 * Publisher Reports Route
 * Example URL: /publisher/reports
 */
$router->addRoute('/publisher/reports', function () {
    // Your logic to handle the publisher reports page
    echo "Publisher Reports";
}, true); // Pass true as the third argument to indicate it's a publisher route

// Add more publisher routes as needed...


// core/route/backend/publisher-route.php
// Define publisher routes using closure functions

/**
 * Publisher Dashboard Route
 * Example URL: /publisher/dashboard
 */
$router->addRoute('/publisher/draft', function () {
    // Check if the publisher user is logged in
    if (isPublisherLoggedIn()) {
        // Your logic to handle the publisher dashboard
        echo 'Publisher Draft';
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's a publisher route

/**
 * Publisher Reports Route
 * Example URL: /publisher/reports
 */
$router->addRoute('/publisher/ads', function () {
    // Check if the publisher user is logged in
    if (isPublisherLoggedIn()) {
        // Your logic to handle the publisher reports page
        echo "Publisher Ads";
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's a publisher route

// Add more publisher routes as needed...


