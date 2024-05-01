<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="form.php" method="GET">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>

    <?php
    $username = $_GET["username"];
    $pass = $_GET["password"];

    $userPass = "shawan96@";

    if ($pass == $userPass) {
        echo "Welcome back! $username";
    } else {
        echo "Username or password does not exist";
    }

    ?>

</body>

</html>