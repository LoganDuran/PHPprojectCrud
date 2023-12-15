<?php

// Verifying if the user has reached the page through a post method

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $favtank = $_POST["favtank"];

    try {

        require_once 'dbh_inc.php';
        require_once 'signup_model_inc.php';
        require_once 'signup_contr_inc.php';

        // Going through some basic error handlers

        $errors = [];

        if (is_input_empty( $username, $pwd, $pwdrepeat, $email)){
            $errors["empty_input"] = "Please fill in all the fields.";
        }
        if (is_email_invalid($email)){
            $errors["invalid_email"] = "Please use a valid email address.";
        }
        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Unfortunately that username already exists.";
        }
        if (is_email_registered($pdo, $email)){
            $errors["email_used"] = "This email address is already registered.";
        }
        if (is_pwdrepeat_same($pwd, $pwdrepeat)){
            $errors["pwd_mismatch"] = "Your passwords do not match.";
        }

        require_once 'config_session_inc.php';

        if ($errors) {
            $_SESSION['errors_signup'] = $errors;
            header("Location: ../index.php");
            die();
        }

        create_user(){
            
        }

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php?error");
    die();
}