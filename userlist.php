<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:../index.php");
}
$userid = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <?php include "css/list.php"; ?>
</head>
<?php
$con = mysqli_connect("localhost", "root", "", "chatfinal");
$sql = "SELECT * FROM user WHERE userid = $userid ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
}
?>

<body>
    <div class="container">

        <div class="box">
            <!-- Login user info -->
            <div class="myinfo">
                <!-- image section -->
                <div class="imgbox">
                    <img src="image/<?php echo $row['pic']; ?>" alt="">
                </div>
                <!-- name section -->
                <div class="namebox">
                    <h1><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h1>
                </div>
                <!-- logout section -->
                <div class="logoutbox">
                    <button><a href="php/logout.php">Log_out</a></button>
                </div>

            </div>
            <?php
            $con = mysqli_connect("localhost", "root", "", "chatfinal");
            $sql1 = "SELECT * FROM user WHERE NOT userid = $userid ";
            $result1 = mysqli_query($con, $sql1);

            ?>
            <!-- other users list -->
            <div class="userbox">
                <?php if (mysqli_num_rows($result1)) {
                    while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                        <div class="user">
                            <a href="chat.php?id=<?php echo $row1['userid']; ?>"">
                                <div class=" userimg">
                                <img src="image/<?php echo $row1['pic']; ?>" alt="">
                        </div>
                        <div class="username">
                            <h2><?php echo $row1['fname']; ?> <?php echo $row1['lname']; ?></h2>
                        </div>
                        </a>
            </div>
        <?php } ?>
    <?php } ?>
        </div>
    </div>
    </div>
</body>

</html>