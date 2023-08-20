<?php

// Define frontend routes using closure functions

/**
 * Main URL Route (Homepage)
 * Example URL: /
 */
$router->addRoute('/', function () {
    // Your logic to handle the homepage or landing page
    echo "Welcome to the SqueHub CMS homepage!";
});

/**
 * Page Route
 * Example URL: /page/about-us
 */
$router->addRoute('/page/:slug', function ($slug) {
    // Your logic to fetch and display the page content based on the slug
    echo "Displaying page with slug: $slug";
});

/**
 * Blog Post Route
 * Example URL: /post/:id
 */
$router->addRoute('/post/:id', function ($id) {
    // Your logic to fetch and display the blog post based on the ID
    echo "Displaying blog post with ID: $id";
});

// Add more frontend routes as needed...

// Define admin routes using closure functions

/**
 * Admin Dashboard Route
 * Example URL: /admin/dashboard
 */
$router->addRoute('/admin/dashboard', function () {
    // Your logic to handle the admin dashboard
    echo "Welcome to the Admin Dashboard!";
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
