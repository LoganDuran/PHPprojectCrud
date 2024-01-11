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
    <!-- <header>
        <h2 class="logo">tanko<span>pedia.net</span></h2>
        
        <div class="navmenu">
        <div class="searchbox">
            <form class="search-input" action="search.php" method="post">
                
                <input id="search" type="text" name="usersearch" placeholder="Search..">


                <button type="submit">Go</button> <br>
            </form>
        </div> -->

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
            <li><a class="loginbutton">
               <?php 
                    if(isset($_SESSION["userid"])){
                      
                     ?> 
                     <button class="loginbutton"><?php echo $_SESSION["useruid"]; ?> </button>
                     <?php              
                    }
                    else
                    {
                        ?>
                        <button class="loginbutton">Login </button>
                        <?php              
                    } ?> 
             </a></li>
            </ul>
        </nav>    
        <div class = "hamMenu"><div class = "hamButton"></div></div>
    </header>






<!-- 
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="#">About</a>
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
        </div> -->
    </header>
    <body>
        
