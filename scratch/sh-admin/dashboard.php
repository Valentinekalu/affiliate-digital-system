<?php
// Include the admin layout template file
require_once __DIR__ . '/admin-layout.php';

$content = "<h1>Welcome to the Admin Dashboard!</h1>"; // The content of the page (you can change it accordingly)
generate_admin_layout($content);

?>
