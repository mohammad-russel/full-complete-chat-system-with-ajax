<?php
session_start();
$userid = $_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "chatfinal");
$sql = "SELECT * FROM user WHERE userid = {$userid}";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    $outgoing = $row['userid'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat With Russel</title>
        <?php include "css/chat.php"; ?>
    </head>


    <body>

        <div class="container">
            <div class="box">
                <div class="chatbox">
                    <div class="header">
                        <div class="back">
                            <a href="userlist.php">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                                </svg>
                            </a>
                        </div>
                        <?php

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }

                        $con = mysqli_connect("localhost", "root", "", "chatfinal");
                        $sql1 = "SELECT * FROM user WHERE userid = $id ";
                        $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1)) {
                            $row1 = mysqli_fetch_assoc($result1);
                            $incoming = $row1['userid']

                        ?>

                            <div class="userinfo">
                                <div class="img">
                                    <img src="image/<?php echo $row1['pic']; ?>" alt="">
                                </div>
                                <div class="name">
                                    <h3>
                                        <?php echo $row1['fname']; ?> </h3>
                                    <!-- <p>Active Now</p> -->
                                </div>
                            </div>
                    </div>

                    <!-- chat box -->

                    <div class="chat" id="chat">

                    </div>

                    <?php date_default_timezone_set("Asia/Dhaka"); ?>
                    <!-- insert your message -->
                    <div class="sendmsg">
                        <form id="form">

                            <input type="text" id="time" name="time" value=" <?php echo date("h:i / d-m-y"); ?> " hidden>

                            <input type="text" id="incoming" class="incoming" name="incoming" value="<?php echo $row1['userid']; ?>" hidden>

                            <input type="text" id="outgoing" class="outgoing" name="outgoing" value="<?php echo $row['userid']; ?>" hidden>

                            <textarea name="message" id="message" cols="17" rows="2" required></textarea>

                            <input type="submit" id="send" name="submit" value="SEND">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
<?php } ?>

    </body>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {


            function load() {
                var incoming = $("#incoming").val();
                var outgoing = $("#outgoing").val();
                $.ajax({
                    url: "php/showmsg.php",
                    type: "post",
                    data: {
                        incoming: incoming,
                        outgoing: outgoing
                    },
                    success: function(data) {
                        $("#chat").html(data);
                    }
                })
            }
            load();


            $("#send").on("click", function(e) {

                e.preventDefault();
                var time = $("#time").val();
                var incoming = $("#incoming").val();
                var message = $("#message").val();

                $.ajax({
                    url: "php/insertmsg.php",
                    type: "POST",
                    data: {
                        time: time,
                        incoming: incoming,
                        message: message
                    },
                    success: function(data) {
                        if (data == 1) {
                            load();
                            $("#form").trigger("reset");
                        } else {
                            alert("con't save record");
                        }
                    }
                })

            });
        });
    </script>

    </html>