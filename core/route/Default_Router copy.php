<?php 
// core/route/Default_Router.php
 class SqueHub_Default_Router
 {
     private $routes = [];
     private $frontend404;
     private $admin404;
 
     /**
      * Set the custom 404 handler for frontend routes.
      *
      * @param callable $callback The closure function to handle the frontend 404 page.
      */
     public function setFrontend404($callback)
     {
         $this->frontend404 = $callback;
     }
 
     /**
      * Set the custom 404 handler for admin routes.
      *
      * @param callable $callback The closure function to handle the admin 404 page.
      */
     public function setAdmin404($callback)
     {
         $this->admin404 = $callback;
     }
 
     /**
      * Add a new route to the router.
      *
      * @param string   $pattern   The route pattern, e.g., '/page/:slug'
      * @param callable $callback  The closure function to handle the route
      * @param bool     $isAdmin   Set to true if it's an admin route, false for frontend route
      */
     public function addRoute($pattern, $callback, $isAdmin = false)
     {
         $this->routes[] = [
             'pattern' => $pattern,
             'callback' => $callback,
             'isAdmin' => $isAdmin,
         ];
     }
 
     /**
      * Handle the current request and execute the associated closure function if a route matches.
      *
      * This method checks the request URI against the registered routes and calls the appropriate
      * closure function if a match is found. If no match is found, it invokes the 404 handler
      * associated with either frontend or admin routes.
      */
     public function route()
     {
         $request_uri = $_SERVER['REQUEST_URI'];
 
         // Remove query string from the request URI, if any
         $request_uri = strtok($request_uri, '?');
 
         $matches = [];
         foreach ($this->routes as $route) {
             $pattern_regex = str_replace('/', '\/', $route['pattern']);
             $pattern_regex = preg_replace('/(:\w+)/', '([^\/]+)', $pattern_regex);
             $pattern_regex = str_replace('...', '.*', $pattern_regex);
 
             if ($route['isAdmin'] && strpos($request_uri, '/admin/') === 0) {
                 if (preg_match('/^' . $pattern_regex . '\/?$/', $request_uri, $matches)) {
                     array_shift($matches);
                     call_user_func_array($route['callback'], $matches);
                     return;
                 }
             } elseif (!$route['isAdmin'] && $route['pattern'] === '/') {
                 if ($request_uri === '/') {
                     call_user_func($route['callback']);
                     return;
                 }
             } else {
                 if (preg_match('/^' . $pattern_regex . '\/?$/', $request_uri, $matches)) {
                     array_shift($matches);
                     call_user_func_array($route['callback'], $matches);
                     return;
                 }
             }
         }
 
         if (empty($matches)) {
             if (strpos($request_uri, '/admin/') === 0 && is_callable($this->admin404)) {
                 // Invoke the custom admin 404 handler, if available
                 call_user_func($this->admin404);
             } else {
                 if (is_callable($this->frontend404)) {
                     // Invoke the custom frontend 404 handler, if available
                     call_user_func($this->frontend404);
                 } else {
                     // If no custom 404 handler is set, display a generic 404 message
                     echo "404 - Page not found";
                 }
             }
         }
     }
 }
 