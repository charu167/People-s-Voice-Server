<?php
session_start();
include '../../db.php';
$putdata = fopen("php://input", 'r');
$str = stream_get_contents($putdata);
fclose($putdata);
$ID = $str;

$sql_sample = "SELECT status as st FROM tbl_gramsevak WHERE GS_ID = $ID";


$a = mysqli_fetch_assoc(mysqli_query($conn, $sql_sample));

if ($a['st'] == 0) {

    $sql = "UPDATE tbl_gramsevak SET status = 1 WHERE GS_ID = $ID";
} else {
    $sql = "UPDATE tbl_gramsevak SET status = 0 WHERE GS_ID = $ID";
}
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
