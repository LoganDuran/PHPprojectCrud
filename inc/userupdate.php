<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $favtank = htmlspecialchars($_POST["favtank"]);

    try {
        require_once "dbh_inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email, favtank = :favtank WHERE id = 8;";

        $statement = $pdo->prepare($query);

        
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pwd", $pwd);
        $statement->bindParam(":favtank", $favtank);
        
        $statement->execute();
        
        $pdo = null;
        $statement = null;

        header("Location: ../change.php");

        die("Error");
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");

}