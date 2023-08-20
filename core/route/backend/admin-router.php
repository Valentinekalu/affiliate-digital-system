<?php 
// core/route/backend/admin-route.php
// Define admin routes using closure functions

/**
 * Admin Dashboard Route
 * Example URL: /admin/dashboard
 */
$router->addRoute('/admin/dashboard', function () {
    // Your logic to handle the admin dashboard
    // Check if the admin user is logged in
    if (isAdminLoggedIn()) {
        // Your logic to handle the admin dashboard
        require_once BASE_PATH . '/views/' . 'backend/admin/dashboard.php';
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's an admin route

/**
 * Admin Users Route
 * Example URL: /admin/users
 */
$router->addRoute('/admin/users', function () {
            // Create a database connection using PDO
        try {
            $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

            // Set PDO attributes for error handling (using exceptions)
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Database Connection Error: " . $e->getMessage();
            // You may log or display the error message in a more user-friendly way
            exit();
        }

        // Fetch all users from the Users table
        $sql = "SELECT * FROM Users";
        $stmt = $dbh->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close the database connection
        $dbh = null;
     // Your logic to handle the admin users
    // Check if the admin user is logged in
    if (isAdminLoggedIn()) {
        // Your logic to handle the admin users
        require_once BASE_PATH . '/views/' . 'backend/admin/users.php';
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's an admin route

$router->addRoute('/admin/user/edit/:slug', function ($slug) {
    // Your logic to handle the admin users
    // Check if the admin user is logged in
    if (isAdminLoggedIn()) {
        // Your logic to handle the admin users

        // Create a database connection using PDO
        try {
            $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

            // Set PDO attributes for error handling (using exceptions)
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Query the database to check if the slug (username) exists as a user_id
            $queryUserId = "SELECT COUNT(*) FROM Users WHERE user_id = :id";
            $stmtUserId = $dbh->prepare($queryUserId);
            $stmtUserId->bindParam(':id', $slug);
            $stmtUserId->execute();
            $userCountById = $stmtUserId->fetchColumn();

            // Query the database to check if the slug (username) exists as a username
            $queryUsername = "SELECT COUNT(*) FROM Users WHERE username = :username";
            $stmtUsername = $dbh->prepare($queryUsername);
            $stmtUsername->bindParam(':username', $slug);
            $stmtUsername->execute();
            $userCountByUsername = $stmtUsername->fetchColumn();


            
            // If the user with the given slug exists (either as user_id or username), display the user details
            // If not, display an error message
            if ($userCountById > 0 || $userCountByUsername > 0) {
                echo "Displaying user with slug: $slug";
            } else {
                echo 'No user found with the provided slug'; // Display an error message
                exit();
            }
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Database Connection Error: " . $e->getMessage();
            exit();
        } finally {
            // Close the database connection
            $dbh = null;
        }
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's an admin route


$router->addRoute('/admin/user/delete/:id', function ($id) {
    // Your logic to handle the admin users
    // Check if the admin user is logged in
    if (isAdminLoggedIn()) {
        // Your logic to handle the admin users

        // Create a database connection using PDO
        try {
            $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

            // Set PDO attributes for error handling (using exceptions)
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Start a transaction
            $dbh->beginTransaction();

            try {
                // Delete from EmailVerifications table
                $deleteEmailQuery = "DELETE FROM EmailVerifications WHERE user_id = :id";
                $stmtDeleteEmail = $dbh->prepare($deleteEmailQuery);
                $stmtDeleteEmail->bindParam(':id', $id);
                $stmtDeleteEmail->execute();

                // Delete from Users table
                $deleteUserQuery = "DELETE FROM Users WHERE user_id = :id";
                $stmtDeleteUser = $dbh->prepare($deleteUserQuery);
                $stmtDeleteUser->bindParam(':id', $id);
                $stmtDeleteUser->execute();

                // Commit the transaction
                $dbh->commit();

                // Redirect back to the users list page
                header('Location: /admin/users'); // Update the URL as needed
                exit();
            } catch (PDOException $e) {
                // Rollback the transaction and handle the error
                $dbh->rollback();
                echo "Error: " . $e->getMessage();
                exit();
            }
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Database Connection Error: " . $e->getMessage();
            exit();
        } finally {
            // Close the database connection
            $dbh = null;
        }
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's an admin route


$router->addRoute('/admin/user/status/:slug', function ($slug) {
    // Your logic to handle the admin users
    // Check if the admin user is logged in
    if (isAdminLoggedIn()) {
        // Your logic to handle the admin users

        // Create a database connection using PDO
        try {
            $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

            // Set PDO attributes for error handling (using exceptions)
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Query the database to check if the slug (username) exists as a user_id
            $queryUserId = "SELECT COUNT(*) FROM Users WHERE user_id = :id";
            $stmtUserId = $dbh->prepare($queryUserId);
            $stmtUserId->bindParam(':id', $slug);
            $stmtUserId->execute();
            $userCountById = $stmtUserId->fetchColumn();

            // Query the database to check if the slug (username) exists as a username
            $queryUsername = "SELECT COUNT(*) FROM Users WHERE username = :username";
            $stmtUsername = $dbh->prepare($queryUsername);
            $stmtUsername->bindParam(':username', $slug);
            $stmtUsername->execute();
            $userCountByUsername = $stmtUsername->fetchColumn();

            // If the user with the given slug exists (either as user_id or username), update the user's status
            // If not, display an error message
            if ($userCountById > 0 || $userCountByUsername > 0) {
                // Update the user's status
                $updateStatusQuery = "UPDATE Users SET user_status = CASE
                                       WHEN user_status = 'Active' THEN 'Inactive'
                                       WHEN user_status = 'Inactive' THEN 'Active'
                                       END
                                       WHERE user_id = :id OR username = :username";
                $stmtUpdateStatus = $dbh->prepare($updateStatusQuery);
                $stmtUpdateStatus->bindParam(':id', $slug);
                $stmtUpdateStatus->bindParam(':username', $slug);
                $stmtUpdateStatus->execute();

                // Redirect back to the users list page
                header('Location: /admin/users'); // Update the URL as needed
                exit();
            } else {
                echo 'No user found with the provided slug'; // Display an error message
                exit();
            }
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Database Connection Error: " . $e->getMessage();
            exit();
        } finally {
            // Close the database connection
            $dbh = null;
        }
    } else {
        // Redirect to the home page
        header('Location: /');
        exit(); // Important: Terminate the script after redirection
    }
}, true); // Pass true as the third argument to indicate it's an admin route



$router->addRoute('/admin/publishers', function () {
    // Your logic to handle the admin users
   // Check if the admin user is logged in
   if (isAdminLoggedIn()) {
       // Your logic to handle the admin users
       require_once BASE_PATH . '/views/' . 'backend/admin/publishers.php';
   } else {
       // Redirect to the home page
       header('Location: /');
       exit(); // Important: Terminate the script after redirection
   }
}, true); // Pass true as the third argument to indicate it's an admin route
// Add more admin routes as needed...


