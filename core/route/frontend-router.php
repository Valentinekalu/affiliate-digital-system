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

$router->addRoute('/login', function () {
require_once BASE_PATH . '/core/auth/login-logic.php' ;
    // Your logic to handle the homepage or landing page
    require_once BASE_PATH . '/views/auth/login.php';
});

$router->addRoute('/register', function () {
    require_once BASE_PATH . '/core/auth/register-logic.php' ;
    // Your logic to handle the homepage or landing page
    require_once BASE_PATH . '/views/auth/register.php';
});

$router->addRoute('/logout', function () {
         // Logout
        session_unset(); // Clear all session variables
        session_destroy(); // Destroy the session
        header("Location: /");


});

$router->addRoute('/:id', function ($id) {
    // Your logic to fetch and display content based on the ID
    echo "Displaying content  with ID: $id";
});