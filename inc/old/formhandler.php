<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $favtank = htmlspecialchars($_POST["favtank"]);

    if (empty($username)) {
        header("Location: ../index.php");
        exit();
    }

    try {
        require_once "dbh_inc.php";

        $query = "INSERT INTO users (username, pwd, email, favtank) VALUES (:username, :pwd, :email, :favtank);";

        $statement = $pdo->prepare($query);

        
        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $pwd);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":favtank", $favtank);
        
        $statement->execute();
        
        $pdo = null;
        $statement = null;

        header("Location: ../index.php");

        die("Error");
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");

}