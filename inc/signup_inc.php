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

        if (is_input_empty( $username, $pwd, $pwdrepeat, $email)){
        }
        if (is_email_valid($email)){
        }

       



    } catch (PDOException $e) {
        die("Lele mile ne'e raboti: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}