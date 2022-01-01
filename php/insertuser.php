<?php
$con = mysqli_connect("localhost", "root", "", "chatfinal");
if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $file = mysqli_real_escape_string($con, $_FILES["img"]["name"]);
    $filetmp = $_FILES["img"]["tmp_name"];
    $folder = "image/";
    $sql = "INSERT INTO user (fname,lname,email,pass,pic) VALUES ('$fname','$lname','$email','$password','$file')";
    $result = mysqli_query($con, $sql);
    move_uploaded_file($filetmp,  "../image/" . $file);
    header("location:../index.php");
}
