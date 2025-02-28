<?php
require_once 'inc/config_session_inc.php';
require_once 'inc/login_view_inc.php';
require_once 'header.php';
?>

<section class="login-container">
    <div class="login-form">
        <h2>Login</h2>
        <form action="inc/login_inc.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="pwd" placeholder="Password">
            </div>

            <button type="submit">Login</button>
        </form>

        <?php
        check_login_errors();
        ?>

        <div class="signup-link">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>