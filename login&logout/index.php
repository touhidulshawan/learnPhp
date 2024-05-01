<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION["username"];
} else {
    $username = null;
}

if(isset($_POST['logout'])){
    // unset sessions
    $_SESSION = array();
    
    // destroy all session
    session_destroy();
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: row-reverse;
            gap: 5px;
            padding: 0px 20px;
        }

        .navbar a,
        .logout-btn {
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            font-size: 1.2em;
            font-weight: 400;
            text-decoration: none;
            transition: all 0.25s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .navbar a:hover,
        .logout-btn:hover {
            background-color: #ddd;
            color: #333;
        }

        .logout-btn {
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .landing {
            text-align: center;
            padding: 100px;
        }

        .landing h1 {
            font-size: 36px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <?php if ($username != null) { ?>
            <form action="index.php" method="post">
                <input class="logout-btn" type="submit" value="Log out" name="logout" style="display: inline-block;">
            </form>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
        <?php if ($username != null) { ?>
            <a href="welcome.php"><?php echo $username; ?></a>
        <?php } ?>
    </div>
    <div class="landing">
        <h1>Welcome to Our Website</h1>
        <p>This is a simple landing homepage to learn login & logout with <strong>PHP</strong></p>
    </div>
</body>

</html>