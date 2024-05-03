<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        width: 400px;
        margin: 20px auto;

    }

    .form-group {
        display: flex;
        align-items: center;
        gap: 13px;
    }

    .form-group>span {
        font-size: 18px;
    }

    .btn {
        padding: 13px 20px;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        width: 140px;
        text-align: center;
        cursor: pointer;
        background-color: #ebdbb2;
        border: 2px solid #282828;
        color: #1d2021;
        border-radius: 10px;
        transition: all 0.28s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        border-color: #ebdbb2;
    }

    .btn:hover {
        background-color: #1d2021;
        color: #ebdbb2
    }

    .success,
    .fail {
        font-size: 22px;
        text-align: center;
        padding: 13px 20px;
        max-width: 400px;
        width: auto;
        margin: 10px auto;
        color: #ebdbb2;
        border-left: 30px solid;
    }

    .success {
        background-color: #282828;
        border-color: green;
    }

    .fail {
        background-color: #1d2021;
        border-color: red;
    }
</style>

<body>

    <form action="index.php" method="post">
        <div class="form-group">
            <input type="radio" name="credit-card" value="Visa">
            <span>Visa</span>
        </div>
        <div class="form-group">
            <input type="radio" name="credit-card" value="Mastercard">
            <span>Mastercard</span>
        </div>
        <div class="form-group">

            <input type="radio" name="credit-card" value="American Express">
            <span>American Express</span>
        </div>
        <input class="btn" type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    if (isset($_POST["credit-card"])) {
        $credit_card = $_POST["credit-card"];
        echo "<p class='success'>Your payment method: {$credit_card}</p>";
    } else {
        echo "<p class='fail'>Please make a selection</p>";
    }
}

?>