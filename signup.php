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
    <title>Sign-up Form</title>
    <?php include "css/form.php"; ?>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="php/insertuser.php" method="post" enctype="multipart/form-data">
                <h2>Sign Up</h2>
                <br>
                <input type="text" class="input" name="fname" id="fname" placeholder="First Name" required>
                <br><br>
                <input type="text" class="input" name="lname" id="lname" placeholder="Last Name" required>
                <br><br>
                <input type="email" class="input" name="email" id="email" placeholder="Email" required>
                <br><br>
                <input type="password" name="password" class="input" id="password" placeholder="Password" required>
                <br><br>
                <input type="file" class="file" name="img" id="img">
                <br><br>
                <div class="click">
                    <input class="submit" type="submit" name="submit" value="Submit">
                    <button>
                        <a href="index.php">Login</a>
                    </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>