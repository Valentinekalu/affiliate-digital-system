<?php 
// Set the main site title
$siteTitle = "Your Site Title";

// Get the current URL path
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove leading slash if present
$currentPath = ltrim($currentPath, '/');

// Split the path into segments
$pathSegments = explode('/', $currentPath);

// Determine the page title based on the URL segments
$pageTitle = $siteTitle;

if (!empty($pathSegments)) {
    $pageTitle = ucfirst(end($pathSegments)) . ' - ' . $siteTitle;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- Add your common CSS, meta tags, etc. here -->
</head>
<body>
    <!-- Common header content -->
    
    <!-- Include the dynamic content using output buffering -->
    <?php echo $content; ?>
    
    <!-- Common footer content -->
</body>
</html>
