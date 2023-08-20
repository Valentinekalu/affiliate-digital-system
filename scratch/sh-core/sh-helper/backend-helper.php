<?php
// /sh-core/sh-helper/backend-helper.php
/**
 * Backend Helper File
 * This file defines functions to generate PHP HTML code structure for the admin layout.
 *
 * @package SqueHub
 */

/**
 * SqueHub Admin Head
 * Function to generate the head section of the admin layout.
 *
 */
function squehub_admin_head()
{
    // Get the current page name from the request URI
    $request_uri = $_SERVER['REQUEST_URI'];
    $page_name = basename($request_uri, '.php');
    $formattedTitle = str_replace('-', ' ', $page_name);

    // Line break after the html tag
    echo PHP_EOL;
    echo <<<HTML
<head>
    <meta charset="UTF-8">
    <title>SqueHub Admin - {$formattedTitle}</title>
    <!-- Add your CSS and JavaScript links here -->
</head>
HTML;
    // Line break before the body tag
    echo PHP_EOL;
}



/**
 * SqueHub Admin Foot
 * Function to generate the footer section of the admin layout.
 *
 */
function squehub_admin_foot()
{
    // Add your admin footer content here
    // For example, you can include JavaScript scripts or any other content that needs to be placed before the closing </body> tag
    echo PHP_EOL;

    // Include the file
    require_once SQUEHUB_ADMIN . '/admin-parts/foot.php';

    // Reopen the heredoc
    echo PHP_EOL;
    echo <<<HTML
   <!-- Continue with the rest of your output here -->
HTML;
    echo PHP_EOL;
}




function admin_assets($path) {
    return SQUEHUB_ADMIN_ASSETS_DIR . $path; // You can adjust the base path as needed
}

