<?php
function route($name, $parameters = []) {
    $routeUrls = [
        // admin urls starts here
        'admin.dashboard' => '/admin/dashboard',
        'admin.users' => '/admin/users',
        'admin.publishers' => '/admin/publishers',

        // publisher url starts here


        // advertiser url starts here


        // frontend url starts here

        //auth url starts here
        'user.login' => BASE_URL . 'login',
        'user.register' => BASE_URL . 'register',
        'user.logout' => BASE_URL . 'logout',
        // Add more route names and URLs here
    ];

    if (array_key_exists($name, $routeUrls)) {
        $url = $routeUrls[$name];

        // Append query parameters if provided
        if (!empty($parameters)) {
            $url .= '?' . http_build_query($parameters);
        }

        echo $url;
    } else {
        echo '#'; // Return a fallback URL or error indication
    }
}