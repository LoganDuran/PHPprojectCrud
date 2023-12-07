
 <?php 
    include_once("header.php");
?>

<body>
    <main>
        <div class="wrapper">
            <form class="centralni-input" action="search.php" method="post">
                
                <input id="search" type="text" name="usersearch" placeholder="Search..">


                <button type="submit">Search</button> <br>


                <a href="index.php">back to Signup</a>
            </form>
        </div>
    </main>
</body>



<?php 
    include_once("footer.php");
?>