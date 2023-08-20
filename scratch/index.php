<?php
/**
 * SqueHub CMS Index File
 *
 * @package SqueHub
 */

// Define the base path of the CMS
define('BASE_PATH', __DIR__);

// Include the configuration file
require_once BASE_PATH . '/sh-config.php';

// Include the routing class
require_once SQUEHUB_CORE_ROUTE;

// Create an instance of the router
$router = new SqueHub_Default_Router();

require_once FRONTEND_URL_NETWORK;
require_once BACKEND_URL_NETWORK;

// Handle the current request
$router->route();

// You may add a 404 error handling here if no route matches the request



