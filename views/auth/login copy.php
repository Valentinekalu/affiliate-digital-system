
<?php
ob_start(); // Start output buffering
?>

<h1>Login</h1>
    <?php if (!empty($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="login_identifier">Username or Email:</label>
        <input type="text" id="login_identifier" name="login_identifier" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>

<?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>



