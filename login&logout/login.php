<?php

session_start();

// define users with passwords
$users = [
    "ironman" => "jarvis",
    "thor" => "godofthundar",
    "hulk" => "strongestavenger"
];

// check if the form submitted or not
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* get username and password value */

    $username = $_POST["username"];
    $password = $_POST["password"];

    /* check user exist and password is valid */

    if (isset($users[$username]) && $users[$username] == $password) {
        // authentication successful, set session variable
        $_SESSION['username'] = $username;

        // redirect to logged in page
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Incorrect username or password. Please try again.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        min-width: 450px;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-btn {
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .login-btn:hover {
        background-color: #0056b3;
    }
    
    .error{
        color: red;
    }
</style>

<body>
    <div class="login-container">
        <h1>Hack The Planet</h1>
        <h4>Login to continue</h4>

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="login" name="login" class="login-btn">

        </form>
        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
    </div>
</body>

</html>