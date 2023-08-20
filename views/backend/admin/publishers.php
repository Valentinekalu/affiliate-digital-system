<?php
ob_start(); // Start output buffering
?>
       <h1>publishers</h1>

              <?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>