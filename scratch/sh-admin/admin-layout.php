<?php
/**
 * Generate Admin Layout
 * Function to generate the complete PHP HTML code structure for the admin layout.
 *
 * @param string $content The content of the admin page.
 */
function generate_admin_layout($content)
{
    // The beginning of the layout
    echo <<<HTML
<!DOCTYPE html>
<html>
HTML;

    // Output the admin head section
    squehub_admin_head();

    // The rest of the layout
    echo <<<HTML
<body>
    <header>
        <!-- Add your admin header content here -->
    </header>
    <nav>
        <!-- Add your admin navigation menu here -->
HTML;
    require_once 'admin-menu.php'; // Include the menu content
    echo <<<HTML
    </nav>
    <main>
        {$content}
    </main>
HTML;

    // Output the admin footer section
    squehub_admin_foot();

    // Closing body and html tags
    echo <<<HTML
</body>
</html>
HTML;
}
