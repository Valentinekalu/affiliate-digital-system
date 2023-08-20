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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php echo $pageTitle; ?></title>
    <!-- CSS files -->
    <link href="<?php  assets('backend/css/tabler.min.css?1684106062'); ?>" rel="stylesheet"/>
    <link href="<?php  assets('backend/css/tabler-flags.min.css?1684106062'); ?>" rel="stylesheet"/>
    <link href="<?php  assets('backend/css/tabler-payments.min.css?1684106062'); ?>" rel="stylesheet"/>
    <link href="<?php  assets('backend/css/tabler-vendors.min.css?1684106062'); ?>" rel="stylesheet"/>
    <link href="<?php  assets('backend/css/demo.min.css?1684106062'); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php assets('backend/css/custom.css'); ?>">
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="<?php assets('backend/js/demo-theme.min.js?1684106062'); ?>"></script>
    <div class="page">
        <div class="page-wrapper">
          <div class="page-body">

                <!-- Include the dynamic content using output buffering -->
                <?php echo $content; ?>

          </div>
        </div>
      </div>
    <!-- Libs JS -->
    <script src="<?php  assets('backend/libs/apexcharts/dist/apexcharts.min.js?1684106062'); ?>" defer></script>
    <script src="<?php  assets('backend/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062'); ?>" defer></script>
    <script src="<?php  assets('backend/libs/jsvectormap/dist/maps/world.js?1684106062'); ?>" defer></script>
    <script src="<?php  assets('backend/libs/jsvectormap/dist/maps/world-merc.js?1684106062'); ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?php  assets('backend/js/tabler.min.js?1684106062'); ?>" defer></script>
    <script src="<?php  assets('backend/js/demo.min.js?1684106062'); ?>" defer></script>
    <script src="<?php  assets('backend/js/custom.js'); ?>"></script>
  </body>
</html>