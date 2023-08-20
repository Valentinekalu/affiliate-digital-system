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

$router->addRoute('/:slug', function ($slug) {
    // Your logic to handle the homepage or landing page
    echo "Displaying single content with slug: $slug";
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

