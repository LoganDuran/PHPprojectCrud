<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    try {
        require_once "dbh_inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $statement = $pdo->prepare($query);

        
        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $pwd);
        
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