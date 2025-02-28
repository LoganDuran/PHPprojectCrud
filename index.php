<?php 
    include_once("header.php");
?>

<body>
    <main>
        <div class="wrapper">
            <form class="centralni-input" action="inc/signup_inc.php" method="POST">
                <H2>Signup Form</H2>
                <label for="username">Enter your Username</label>
                <input id="username" type="text" name="username" placeholder="Username">

                <label for="email">Enter your email</label>
                <input id="email" type="text" name="email" placeholder="email">
                
                <label for="pwd">Enter your Password</label>
                <input type="password" name="pwd" placeholder="Password">

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
                <?php
                check_signup_errors();
                ?>

            </form>
        </div>
    </main>
</body>


<?php 
    include_once("footer.php");
?>