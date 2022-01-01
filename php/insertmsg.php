<?php
session_start();
$userid = $_SESSION["email"];

$con = mysqli_connect("localhost", "root", "", "chatfinal");
$sql = "SELECT * FROM user WHERE userid = {$userid}";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    $outgoing = $row['userid'];
}
$time = mysqli_real_escape_string($con, $_POST['time']);
$incoming = mysqli_real_escape_string($con, $_POST['incoming']);
$message = mysqli_real_escape_string($con, $_POST['message']);
$sql2 = "INSERT INTO msg(mtime,incoming,outgoing,msg) VALUES('{$time}',{$incoming},{$outgoing},'{$message}') ";
$result2 = mysqli_query($con, $sql2);

if ($result2) {
    echo 1;
} else {
    echo 0;
}
