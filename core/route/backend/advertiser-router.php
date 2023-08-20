<?php 

// core/route/backend/advertiser-route.php
// Define advertiser routes using closure functions

/**
 * Advertiser Dashboard Route
 * Example URL: /advertiser/dashboard
 */
$router->addRoute('/advertiser/dashboard', function () {
    // Your logic to handle the advertiser dashboard
    echo 'Advertiser Dashboard';
}, true); // Pass true as the third argument to indicate it's an advertiser route

/**
 * Advertiser Campaigns Route
 * Example URL: /advertiser/campaigns
 */
$router->addRoute('/advertiser/campaigns', function () {
    // Your logic to handle the advertiser campaigns page
    echo "Advertiser Campaigns";
}, true); // Pass true as the third argument to indicate it's an advertiser route

// Add more advertiser routes as needed...
