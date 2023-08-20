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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
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
    <?php require_once 'sidebar.php'; ?>

        <div class="page-wrapper main-content">
        <?php require_once 'breadcrumb.php'; ?>
          <div class="page-body">
            <div class="container-xl">
                <!-- Include the dynamic content using output buffering -->
                <?php echo $content; ?>
            </div>


            <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
              <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                    <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                    <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                    <li class="list-inline-item">
                      <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                        Sponsor
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                      Copyright &copy; 2023
                      <a href="." class="link-secondary">Tabler</a>.
                      All rights reserved.
                    </li>
                    <li class="list-inline-item">
                      <a href="./changelog.html" class="link-secondary" rel="noopener">
                        v1.0.0-beta19
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>

          <?php require_once __DIR__ . '/modals.php'; ?>

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