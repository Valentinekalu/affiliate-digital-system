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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    
    $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Fetch and sanitize user inputs
        $fullName = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $userType = $_POST['user_type']; // 'Admin', 'Publisher', or 'Advertiser'
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // Check if username already exists
        $checkUsernameQuery = "SELECT COUNT(*) as count FROM Users WHERE username = ?";
        $stmt = $dbh->prepare($checkUsernameQuery);
        $stmt->execute([$username]);
        $resultUsername = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if email already exists
        $checkEmailQuery = "SELECT COUNT(*) as count FROM Users WHERE email = ?";
        $stmt = $dbh->prepare($checkEmailQuery);
        $stmt->execute([$email]);
        $resultEmail = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultUsername['count'] > 0) {
            // Username already exists
            echo "Username already exists.";
        } elseif ($resultEmail['count'] > 0) {
            // Email already exists
            echo "Email already exists.";
        } else {
            // Generate email verification token
            $verificationToken = bin2hex(random_bytes(32));
            $verificationExpiry = date('Y-m-d H:i:s', strtotime('+24 hours'));

            // Insert user data into the Users table
            try {
                $insertUserQuery = "INSERT INTO Users (full_name, username, email, password, user_type, country, state, city, address, phone, registration_date, last_updated_date, user_status) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), 'Inactive')";
                $stmt = $dbh->prepare($insertUserQuery);
                $stmt->execute([$fullName, $username, $email, $password, $userType, $country, $state, $city, $address, $phone]);

                $userId = $dbh->lastInsertId();

                // Insert email verification data into EmailVerifications table
                $insertVerificationQuery = "INSERT INTO EmailVerifications (user_id, verification_token, verification_expiry, is_verified) 
                                            VALUES (?, ?, ?, false)";
                $stmt = $dbh->prepare($insertVerificationQuery);
                $stmt->execute([$userId, $verificationToken, $verificationExpiry]);

                // Redirect to a success page or login page
                header("Location: /login"); // Change this URL as needed
                exit();
            } catch (PDOException $e) {
                // Handle database errors
                echo "Registration Error: " . $e->getMessage();
                // You can redirect to an error page or display an error message
            }
        }
    }
}
