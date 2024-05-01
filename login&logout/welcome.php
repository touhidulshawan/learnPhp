<?php

session_start();

// check if the user is logged-in, else redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// display welcome message

echo "<h1><center>Welcome {$_SESSION['username']}</center></h1>";

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<style>
    .img-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
        align-items: center;
        width: 450px;
        height: 450px;
        object-fit: cover;
        margin: 0 auto;
    }

    img {
        width: 100%;
        height: 100%;
        padding: 8px;
        border-radius: 8px;
        box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
        ;
    }
</style>

<body>

    <div class="img-container">

        <?php if ($username == "ironman") { ?>
            <img src="https://media.giphy.com/media/ZXeWyUaxZfAm8AVtR0/giphy.gif?cid=ecf05e47u11ajjyi7eo95e6x9zvtnhu89git8xit8numbcvg&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="ironman">
            <a href="index.php">Home</a>
        <?php } elseif ($username == "thor") { ?>
            <img src="https://media.giphy.com/media/ckeHl52mNtoq87veET/giphy.gif?cid=790b76117jl9t5jx78kz5koa7z61xkd2anz73vdyfakay82h&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="thor">
            <a href="index.php">Home</a>
        <?php } elseif ($username == "hulk") { ?>
            <img src="https://media.giphy.com/media/XSc4Kkc5u2WZy/giphy.gif?cid=790b7611rizqu2o36ojzohf66ipvu91a8h38e8ttdn32w43d&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="hulk">
            <a href="index.php">Home</a>
        <?php } ?>
    </div>

</body>

</html>