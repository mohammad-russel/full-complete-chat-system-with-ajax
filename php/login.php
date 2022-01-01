<?php
session_start();
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "chatfinal");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email ='{$email}' AND pass ='{$password}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION["email"] = $row['userid'];
    if (mysqli_num_rows($result) > 0) {
        header("location:../userlist.php");
    } else {
        header("location:index.php");
        echo "not match";
    }
}
