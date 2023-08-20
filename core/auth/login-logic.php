<?php
try {
    $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

    // Set PDO attributes for error handling (using exceptions)
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, you can set other PDO attributes (e.g., character set, etc.)

} catch (PDOException $e) {
    // Handle database connection errors
    echo "Database Connection Error: " . $e->getMessage();
    // You may log or display the error message in a more user-friendly way
    exit();
}

// Generate a CSRF token and store it in the session
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Initialize the login error message
$login_error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {

    $loginIdentifier = $_POST['login_identifier']; // User can enter either username or email
    $password = $_POST['password'];

    // Query to fetch user data based on username or email
    $getUserQuery = "SELECT * FROM Users WHERE username = :identifier OR email = :identifier";
    $stmt = $dbh->prepare($getUserQuery);
    $stmt->execute(['identifier' => $loginIdentifier]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_type'] = $user['user_type'];

        // Redirect based on user type
        $userType = $user['user_type'];
        
        if ($userType === 'Admin') {
            header("Location: /admin/dashboard");
            exit();
        } elseif ($userType === 'Publisher') {
            header("Location: /publisher/dashboard");
            exit();
        } elseif ($userType === 'Advertiser') {
            header("Location: /advertiser/dashboard");
            exit();
        } else {
            // Invalid user type
            $login_error = "Unauthorized Access"; // Set the login error message
        }

    } else {
        // Failed login
        $login_error = "Invalid username/email or password."; // Set the login error message
    }
}