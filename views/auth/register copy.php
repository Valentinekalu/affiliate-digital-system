<?php
ob_start(); // Start output buffering
?>
<div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="<?php echo assets('backend/static/logo.svg'); ?>" height="36" alt=""></a>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.getElementById("registration-form");

            form.addEventListener("submit", function (event) {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                alert("Passwords do not match!");
            }
            });
        });
        </script>
        <form class="card card-md" id="registration-form" action="" method="post" autocomplete="off" novalidate>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <div class="mb-3">
                <label class="form-label required" for="full_name">Full Name</label>
                <input type="text" name="full_name" class="form-control" required placeholder="Enter Full Name">
            </div>
            <div class="mb-3">
              <label class="form-label" for="username">Username</label>
              <input type="text" name="username" class="form-control" required placeholder="Enter Username">
            </div>
            <div class="mb-3">
              <label class="form-label" for="email">Email address</label>
              <input type="email" name="email" class="form-control" required placeholder="Enter email">
            </div>
            <div class="mb-3">
             <label class="form-label" for="user_type">Register As</label>
                <select class="form-select" name="user_type" required >
                <option value="Publisher">Publisher</option>
                <option value="Advertiser">Advertiser</option>
                <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="off">
                <span class="input-group-text">
                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                </a>
                </span>
            </div>
            </div>

            <div class="mb-3">
            <label class="form-label" for="confirm_password">Confirm Password</label>
            <div class="input-group input-group-flat">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required autocomplete="off">
                <span class="input-group-text">
                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                </a>
                </span>
            </div>
            </div>

            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Create new account</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Already have account? <a href="<?php  route('user.login'); ?>" tabindex="-1">Sign in</a>
        </div>
      </div>

      <?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>