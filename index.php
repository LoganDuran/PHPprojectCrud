<?php 
    include_once("header.php");
    session_start();

?>

<body>
    <main>
        <div class="wrapper">
            <form class="centralni-input" action="inc/formhandler.php" method="post">
                <H2>Signup Form</H2>
                <label for="username">Enter your Username</label>
                <input id="username" required type="text" name="username" placeholder="Username">

                <label for="email">Enter your email</label>
                <input id="email" required type="text" name="email" placeholder="email">
                
                <label for="pwd">Enter your Password</label>
                <input type="password" name="pwd" id="pwd" placeholder="Password">

                <label for="pwdrepeat">Re-enter your password</label>
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                
                <label for="favtank">Choose your favorite Tank</label>
                <select id="favtank" name="favtank">
                    <option value="none">None</option>
                    <option value="t34">T-34</option>
                    <option value="tigar">Tigar</option>
                    <option value="sherman">M4 Sherman</option>
                    <option value="is2">Joseph Stalin 2</option>
                </select>
                
                <button type="submit">Submit</button> <br>

                <a href="change.php">Change account</a>
            </form>
        </div>
    </main>
</body>


<?php 
    include_once("footer.php");
?>