<?php

if ($_SERVER["REQUESt_METHOD"] === "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $favtank = htmlspecialchars($_POST["favtank"]);

    try {

        require_once 'dbh_inc.php';
        require_once 'signup_model_inc.php';
        require_once 'signup_contr_inc.php';

        // ERROR HANDLERS

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
            $errors["email_used"] = "That email address is already registered.";
        }
        if (is_pwdrepeat_same($pwd, $pwdrepeat)){
            $errors["pwd_mismatch"] = "Your passwords do not match.";
        }

        require_once 'config_session_inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }



    } catch (PDOException $e) {
        die("Query error: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}