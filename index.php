<?php
session_start(); // Make sure to start the session at the beginning of the page

if (isset($_SESSION['user_type'])) {
   $user_type = $_SESSION['user_type'];
} else {
    echo "";

}

if (isset($_SESSION['user_id'])) {
    $use_id = $_SESSION['user_id'];
} else {
    echo "";
}

// Define the base path of the CMS
define('BASE_PATH', __DIR__);

define('MAIN_CONFIG', BASE_PATH . '/config.php');


// Include the configuration file
require_once BASE_PATH . '/config.php';

// Define the path to the directory containing helper files
$helpersDirectory = HELPERS_DIR;

// Get the list of files in the directory
$helperFiles = scandir($helpersDirectory);

// Loop through each file and include/require it if it's a PHP file
foreach ($helperFiles as $file) {
    $filePath = $helpersDirectory . '/' . $file;

    if (is_file($filePath) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        require_once $filePath;
    }
}

// Include the routing class
require_once DEFAULT_ROUTE;

// Create an instance of the router
$router = new SqueHub_Default_Router();

require_once BASE_PATH . '/core/route/router-auth.php';

require_once FRONTEND_ROUTER;
require_once ADMIN_ROUTER;
require_once PUBLISHER_ROUTER;
require_once ADVERTISER_ROUTER;

// Handle the current request
$router->route();

// You may add a 404 error handling here if no route matches the request


?>
<a href="<?php  route('admin.dashboard'); ?>">Admin Dashboard</a>
<a href="<?php  route('admin.users'); ?>">Admin Users</a>
<!-- Add more links for other routes -->
<script src="<?php echo assets('js/custom.js'); ?>"></script>
