<?php
ob_start(); // Start output buffering


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
?>
<div class="row row-cards">
    <div class="col-12">



    <?php
if (!empty($users)) {
    echo '<table class="table table-vcenter card-table scrollable-table">
            <thead>
                <tr>
                    <th>Name/Username</th>
                    <th>Email/Phone</th>
                    <th>Country/State</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Reg Date</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>';

            foreach ($users as $user) {
                echo '<tr>
                        <td>
                            <div class="d-flex py-1 align-items-center">
                                <span class="avatar me-2" style="background-image: url(' . $user["profile_picture_url"] . ')"></span>
                                <div class="flex-fill">
                                    <div class="font-weight-medium">' . $user["full_name"] . '</div>
                                    <div class="text-muted">';
                
                // Check if the user has a username, otherwise use user ID for edit link
                if (!empty($user['username'])) {
                    echo '<a href="#" class="text-reset">' . $user["username"] . '</a>';
                }
                echo '</div>
                    </div>
                </div>
            </td>
            <td>
                <div>' . $user["email"] . '</div>
                <div class="text-muted">' . $user["phone"] . '</div>
            </td>
            <td class="text-muted">
                <div class="font-weight-medium">' . $user["country"] . '</div>
                <div class="text-muted"><a href="" class="text-reset">' . $user["state"] . '</a></div>
            </td>
            <td class="text-muted">' . $user["user_type"] . '</td>
            <td class="text-muted">' . $user["user_status"] . '</td>
            <td class="text-muted">' . $user["registration_date"] . '</td>
            <td>
                <div class="btn-list flex-nowrap">
                    <a href="/admin/user/edit/';
                
                // Check if the user has a username, otherwise use user ID for edit link
                if (!empty($user['username'])) {
                    echo $user['username'];
                } else {
                    echo $user['user_id'];
                }
                
                echo '" class="btn">Edit</a>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Deactivate</a>
                            <a class="dropdown-item" href="/admin/user/delete/' . $user['user_id'] . '"></a>
                        </div>
                    </div>
                </div>
            </td>
            </tr>'; 
            }
            
            
    echo '</tbody></table>';
} else {
    echo "No users found";
}
?>



    </div>
</div>



              <?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>