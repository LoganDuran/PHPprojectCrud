<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PocetakPHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="wrapper">
            <form class="centralni-input" action="inc/formhandler.php" method="post">
                <label for="username">This is a Username field</label>
                <input id="username" required type="text" name="username" placeholder="Username">

                <label for="email">This is a email field</label>
                <input id="email" required type="text" name="email" placeholder="email">
                
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
                
                <button type="submit">Submit</button> <br>
            </form>
        </div>
    </main>
</body>
</html>