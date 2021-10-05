<?php
session_start();
include '../../db.php';
$putdata = fopen("php://input", 'r');
$str = stream_get_contents($putdata);
fclose($putdata);
$ID = $str;
$sql = "UPDATE tbl_complaint SET status = 'completed' WHERE C_ID = $ID";
if (mysqli_query($conn, $sql)) {
    echo $str;
}
