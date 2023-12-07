<?php 
    include_once("header.php");
?>

<body>
    <main>
        <div class="wrapper">
            <form class="centralni-input" action="inc/userupdate.php" method="post">
                <h2>Edit Account</h2>
                <label for="username">This is a Username field</label>
                <input id="username" type="text" name="username" placeholder="Username">

                <label for="email">This is a email field</label>
                <input id="email" type="text" name="email" placeholder="email">
                
                <label for="pwd">This is a Password field</label>
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                
                <label for="favtank">Favorite Tank</label>
                <select id="favtank" name="favtank">
                    <option value="none">None</option>
                    <option value="t34">T-34</option>
                    <option value="tigar">Tigar</option>
                    <option value="sherman">M4 Sherman</option>
                    <option value="is2">Joseph Stalin 2</option>
                </select>
                
                
                <button type="submit">Save Changes</button> <br>
             </form>

            <form class="centralni-input" action="inc/userdelete.php" method="post">
                <h2>Delete Account</h2>
                <label for="username">This is a Username field</label>
                <input id="username" type="text" name="username" placeholder="Username">
                
                <label for="pwd">This is a Password field</label>
                <input type="password" name="pwd" id="pwd" placeholder="Password">
           
                
                <button type="submit">Delete</button> <br>


                <a href="index.php">back to Signup</a>
            </form>
        </div>
    </main>
</body>



<?php 
    include_once("footer.php");
?>