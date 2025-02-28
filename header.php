<?php
require_once 'inc/config_session_inc.php';
require_once 'inc/signup_view_inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tankopedia.net</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


    <header class="header">
        <h2 class="logo">tanko<span>pedia.net</span></h2>
         <nav class="nav">
          <ul class="navlist">
            <li><div class="searchbox">
                <form class="search-input" action="search.php" method="post">
                <input id="search" type="text" name="usersearch" placeholder="Search..">
                <button class="searchbutton" type="submit">Go</button> <br>
                </form>
            </div></li>
            <li class="underline"><a href="index.php">Home</a></li>
            <li class="underline"><a href="#">About</a></li>
            <li class="underline"><a href="#">Contact</a></li>
            <li><a>
                <?php 
                if (isset($_SESSION["user_id"])) {
                    ?>
                    <form action="inc/logout_inc.php" method="post">
                        <button class="loginbutton">Logout</button>
                    </form>
                    <?php
                } else {
                    ?>
                    <button class="loginbutton" onclick="window.location.href='login.php'">Login</button>
                    <?php
                }
                ?> 
            </a></li>
            </ul>
        </nav>    
        <div class = "hamMenu"><div class = "hamButton"></div></div>
    </header>

    <body>
        
