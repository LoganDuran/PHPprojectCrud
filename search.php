
 <?php 
    include_once("header.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userSerch = $_POST["usersearch"];
    
        try {
            require_once "inc/dbh_inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;;";
    

            $statement = $pdo->prepare($query);
    
            
            $statement->bindParam(":usersearch", $userSerch);
            
            $statement->execute();

            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            $pdo = null;
            $statement = null;
    
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    
    } else {
        header("Location: ../index.php");
    
    }
?>

<body>
    <main>
        <div class="wrapper">
            <div class="searchresults">
                 <?php 
            
                     if (empty($results)) {
                           echo "<p>No results</p>";
                      } else {
                        foreach ($results as $row) {
                           echo "<h4>" . htmlspecialchars ($row["username"]) . "</h4>"; 
                           echo htmlspecialchars($row["comment_text"]) ."<br>";  
                           echo htmlspecialchars($row["created_at"]);
          
                        }
                      }






                  ?>
            </div>
        </div>
    </main>
</body>



<?php 
    include_once("footer.php");
?>