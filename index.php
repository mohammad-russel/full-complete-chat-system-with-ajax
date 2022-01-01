<?php
session_start();
if (isset($_SESSION["email"])) {
    header("location:userlist.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <?php include "css/form.php"; ?>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="php/login.php" method="post">
                <h2>Login</h2>
                <br>
                <input class="input" type="email" name="email" id="email" placeholder="Email" required>
                <br><br>
                <input class="input" type="password" name="password" id="password" placeholder="Password" required>
                <br><br>

                <div class="click">
                    <input class="submit" type="submit" name="submit" value="Login">
                    <button>
                        <a href="signup.php">Sign-Up</a>
                    </button>

                </div>


            </form>
        </div>
    </div>
</body>

</html>