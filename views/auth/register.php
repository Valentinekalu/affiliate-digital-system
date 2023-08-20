<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="user_type">User Type:</label>
        <select name="user_type" required>
            <option value="Admin">Admin</option>
            <option value="Publisher">Publisher</option>
            <option value="Advertiser">Advertiser</option>
        </select><br>
        <label for="country">Country:</label>
        <input type="text" name="country" required><br>
        <label for="state">State:</label>
        <input type="text" name="state" required><br>
        <label for="city">City:</label>
        <input type="text" name="city" required><br>
        <label for="address">Address:</label>
        <input type="text" name="address" required><br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
