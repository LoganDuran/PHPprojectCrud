<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["pwd"]);
    $favoriteTank = htmlspecialchars($_POST["favorite-tank"]);

    if (empty($username)) {
        header("Location: ../index.php");
        exit();
    }

}
else {
    header("Location: ../index.php");

}