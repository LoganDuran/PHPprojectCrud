<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tankophile.net</title>
    <link rel="stylesheet" href="style.css">
</head>
    <header>
        <h2 class="logo">Tankophile.net</h2>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="search.php">Search</a>
            <a href="#">Contact</a>
            <a class="allbuttons">
                <?php 
                    if(isset($_SESSION["userid"])){
                      
                     ?> 
                     <button class="loginBtn-popup"><?php echo $_SESSION["useruid"]; ?> </button>
                     <?php              
                    }
                    else
                    {
                        ?>
                        <button class="loginBtn-popup">Login </button>
                        <?php              
                    }
                
                ?>
            </a>
        </nav>
    </header>
    <body>
        
