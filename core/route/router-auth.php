<?php
// core/route/router-auth.php
// Check if an admin user is logged in
function isAdminLoggedIn() {
    return isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'Admin';
}

// Check if a publisher user is logged in
function isPublisherLoggedIn() {
    return isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'Publisher';
}

// Check if an advertiser user is logged in
function isAdvertiserLoggedIn() {
    return isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'advertiser';
}


// Set the authentication check function for admin routes
$router->setAuthCheckCallback('admin', function () {
    // Implement your admin authentication check logic here
    // Return true if the user is authenticated, otherwise false
    return isAdminLoggedIn(); // Replace with your admin authentication check function
});

// Set the authentication check function for publisher routes
$router->setAuthCheckCallback('publisher', function () {
    // Implement your publisher authentication check logic here
    // Return true if the user is authenticated, otherwise false
    return isPublisherLoggedIn(); // Replace with your publisher authentication check function
});

// Set the authentication check function for advertiser routes
$router->setAuthCheckCallback('advertiser', function () {
    // Implement your advertiser authentication check logic here
    // Return true if the user is authenticated, otherwise false
    return isAdvertiserLoggedIn(); // Replace with your advertiser authentication check function
});