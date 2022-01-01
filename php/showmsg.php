<?php

$incoming = $_POST['incoming'];
$outgoing = $_POST['outgoing'];

$con = mysqli_connect("localhost", "root", "", "chatfinal");
$sql = "SELECT * FROM msg LEFT JOIN user ON user.userid = msg.outgoing WHERE ( outgoing = $outgoing and incoming = $incoming) OR (outgoing = $incoming AND incoming = $outgoing ) Order by msgid DESC ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['outgoing'] == $outgoing) {
            echo $output = '
                    <h6>' . $row['mtime'] . '</h6>
                    <div class="c outgoing">
                        <p>
                            ' . $row["msg"] . '
                        </p>
                    </div>
                    ';
        } else {
            echo $output = '
                    <h6>' . $row['mtime'] . '</h6>
                    <div class="c incoming">
                        <p>
                             ' . $row['msg'] . '
                        </p>
                    </div>
                    ';
        }
    }
} else {
    echo "<p> No message </p>";
}
